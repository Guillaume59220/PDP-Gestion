<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 01.02.2018
 * Time: 15:46
 */

use Symfony\Component\Security\Core\User\UserInterface;

 abstract class User implements UserInterface
{

    private $id_user,
            $email,
            $mdp,
            $role_user;

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getRoleUser()
    {
        return $this->role_user;
    }

    /**
     * @param mixed $role_user
     */
    public function setRoleUser($role_user)
    {
        $this->role_user = $role_user;
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials() {
        // Nothing to do here
    }
}