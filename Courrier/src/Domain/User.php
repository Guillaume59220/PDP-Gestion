<?php

namespace Courrier\Domain;

use Symfony\Component\Security\Core\User\UserInterface;
use Courrier\DAO\UserDAO;

class User implements UserInterface
{

    private $id_user;


    private $email;


    private $mdp;

    private $salt;

    private $roles;
<<<<<<< HEAD

=======
>>>>>>> 38b97586b0de2e0251a550f6542c1d7209e63c75

    public function getId() {
        return $this->id_user;
    }

    public function setId($id_user) {
        $this->id_user = $id_user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param mixed $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }


    public function getUsername() {
        return $this->email;
    }

    public function setUsername($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPassword() {
        return $this->mdp;
    }

    public function setPassword($mdp) {
        $this->mdp = $mdp;
        return $this;
    }



    public function getRoles() {
        return $this->roles;
    }

    public function setRoles($role) {
        $this->roles = [$role];
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials() {
        // Nothing to do here
    }
}
