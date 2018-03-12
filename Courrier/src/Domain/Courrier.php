<?php

namespace Courrier\Domain;

class Courrier
{

    private $id_courrier,
            $date_entre,
            $date_sortie,
            $scan,
            $fax,
            $annotation,
            $id_client,
            $id_type_courrier;


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
    public function getDateSortie()
    {
        return $this->date_sortie;
    }

    /**
     * @param mixed $date_sortie
     */
    public function setDateSortie($date_sortie)
    {
        $this->date_sortie = $date_sortie;
    }

    /**
     * @return mixed
     */
    public function getScan()
    {
        return $this->scan;
    }

    /**
     * @param mixed $scan
     */
    public function setScan($scan)
    {
        $this->scan = $scan;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * @param mixed $annotation
     */
    public function setAnnotation($annotation)
    {
        $this->annotation = $annotation;
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
    public function setIdClient(Client $id_client)
    {
        $this->client = $id_client;
    }



    public function getIdTypeCourrier()
    {
        return $this->id_type_courrier;
    }




}
