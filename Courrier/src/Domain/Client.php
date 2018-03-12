<?php

namespace Courrier\Domain;

class Client
{

    private $id_client;

    private $code_client;

    private $nom_client;

    private $siren;

    private $date_contract;

    private $domination_sociale;

    private $capital;

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
    public function getCodeClient()
    {
        return $this->code_client;
    }

    /**
     * @param mixed $code_client
     */
    public function setCodeClient($code_client)
    {
        $this->code_client = $code_client;
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

    /**
     * @return mixed
     */
    public function getSiren()
    {
        return $this->siren;
    }

    /**
     * @param mixed $siren
     */
    public function setSiren($siren)
    {
        $this->siren = $siren;
    }

    /**
     * @return mixed
     */
    public function getDateContract()
    {
        return $this->date_contract;
    }

    /**
     * @param mixed $date_contract
     */
    public function setDateContract($date_contract)
    {
        $this->date_contract = $date_contract;
    }

    /**
     * @return mixed
     */
    public function getDominationSociale()
    {
        return $this->domination_sociale;
    }


    public function setDominationSociale($domination_sociale)
    {
        $this->domination_sociale = $domination_sociale;
    }

    /**
     * @return mixed
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * @param mixed $capital
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
    }



}
