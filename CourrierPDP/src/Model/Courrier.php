<?php
/**
 * Created by PhpStorm.
 * User: Kasia
 * Date: 01.02.2018
 * Time: 15:19
 */

class Courrier
{
    private $id_courrier,
            $date_entre,
            $addnotation,
            $id_client,
            $clientObj;

    /**
     * @return mixed
     */
    public function getIdCourrier()
    {
        return $this->id_courrier;
    }

    /**
     * @param mixed $id_courrier
     */
    public function setIdCourrier($id_courrier)
    {
        $this->id_courrier = $id_courrier;
    }

    /**
     * @return mixed
     */
    public function getDateEntre()
    {
        return $this->date_entre;
    }

    /**
     * @param mixed $date_entre
     */
    public function setDateEntre($date_entre)
    {
        $this->date_entre = $date_entre;
    }

    /**
     * @return mixed
     */
    public function getAddnotation()
    {
        return $this->addnotation;
    }

    /**
     * @param mixed $addnotation
     */
    public function setAddnotation($addnotation)
    {
        $this->addnotation = $addnotation;
    }

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
    public function getClientObj()
    {
        return $this->clientObj;
    }

    /**
     * @param mixed $clientObj
     */
    public function setClientObj($clientObj)
    {
        $this->clientObj = $clientObj;
    }




}