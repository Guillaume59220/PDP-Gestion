<?php

namespace Courrier\DAO;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Courrier\Domain\User;

class UserDAO extends DAO implements UserProviderInterface
{
    /**
     * Returns a list of all users, sorted by role and name.
     *
     * @return array A list of all users.
     */
    public function findAll() {
        $sql = "select * from user order by role_user, username";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $entities = array();
        foreach ($result as $row) {
            $id_user = $row['id_user'];
            $entities[$id_user] = $this->buildDomainObject($row);
        }
        return $entities;
    }


    public function find($id_user) {
        $sql = "select * from user where id_user=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id_user));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No user matching id " . $id_user);
    }


    public function save(User $user) {
        $userData = array(
            'username' => $user->getUsername(),
            'salt' => $user->getSalt(),
            'password' => $user->getPassword(),
            'role_user' => $user->getRoles()[0]
            );

        if ($user->getId()) {
            // The user has already been saved : update it
            $this->getDb()->update('user', $userData, array('id_user' => $user->getId()));
        } else {
            // The user has never been saved : insert it
            $this->getDb()->insert('user', $userData);
            // Get the id of the newly created user and set it on the entity.
            $id_user = $this->getDb()->lastInsertId();
            $user->setId($id_user);
        }
    }

    /**
     * Removes an user from the database.
     *
     * @param integer $id The user id.
     */
    public function delete($id) {
        // Delete the user
        $this->getDb()->delete('user', array('id_user' => $id));
    }

    /**
     * {@inheritDoc}
     */
    public function loadUserByUsername($username)
    {
        $sql = "select * from user where username=?";
        $row = $this->getDb()->fetchAssoc($sql, array($username));

        if ($row) {
            #dump($this->buildDomainObject($row));
            return $this->buildDomainObject($row);
        } else {
            throw new UsernameNotFoundException(sprintf('User "%s" not found.', $username));
        }
    }



    /**
     * {@inheritDoc}
     */
    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $class));
        }
        return $this->loadUserByUsername($user->getUsername());
    }

    /**
     * {@inheritDoc}
     */
    public function supportsClass($class)
    {
        return 'Courrier\Domain\User' === $class;
    }


    protected function buildDomainObject(array $row) {
        $user = new User();
        $user->setId($row['id_user']);
        $user->setUsername($row['username']);
        $user->setPassword($row['password']);
        $user->setSalt($row['salt']);
        $user->setRoles($row['role_user']);
        return $user;
    }
}

