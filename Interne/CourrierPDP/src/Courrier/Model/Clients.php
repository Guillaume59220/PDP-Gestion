<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 01.02.2018
 * Time: 15:43
 */

class Client
{
    private $id_client,
            $nom_client;

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * @param mixed $id_client
     */
    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;
    }

    /**
     * @return mixed
     */
    public function getNomClient()
    {
        return $this->nom_client;
    }

    /**
     * @param mixed $nom_client
     */
    public function setNomClient($nom_client)
    {
        $this->nom_client = $nom_client;
    }


}