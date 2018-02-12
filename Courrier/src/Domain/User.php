<?php

namespace Courrier\Domain;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    /**
     * User id.
     *
     * @var integer
     */
    private $id_user;

    /**
     * User name.
     *
     * @var string
     */
    private $email;

    /**
     * User password.
     *
     * @var string
     */
    private $mdp;

    /**
     * Salt that was originally used to encode the password.
     *
     * @var string
     */

    /**
     * Role.
     * Values : ROLE_USER or ROLE_ADMIN.
     *
     * @var string
     */
    private $role_user;

    public function getId() {
        return $this->id_user;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getEmail() {
        return $this->email;
    }

    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMdp() {
        return $this->mdp;
    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
        return $this;
    }



    public function getRole() {
        return $this->role_user;
    }

    public function setRole($role_user) {
        $this->role = $role_user;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array($this->getRole());
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials() {
        // Nothing to do here
    }
}
