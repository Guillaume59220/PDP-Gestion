<?php

namespace Courrier\DAO;

use Courrier\Domain\Courrier;

class CourrierDAO extends DAO
{
    public function findAll() {
        $sql = "select * from courrier
        INNER JOIN type_courrier tc ON courrier.id_type_courrier = tc.id_type_courrier
        INNER JOIN client c2 ON courrier.id_client = c2.id_client
        order by id_courrier desc";
        $result = $this->getDb()->fetchAll($sql);


        $courrier = array();
        foreach ($result as $row) {
            $courrierId = $row['id_courrier'];
            $courrier[$courrierId] = $this->buildDomainObject($row);
        }
        return $courrier;
    }

    public function find($id_courrier) {
        $sql = "select * from courrier where id_courrier =?";
        $row = $this->getDb()->fetchAssoc($sql, array($id_courrier));

        if ($row)
            return $this->buildDomainObject($row);
        else

            throw new \Exception("Pas de courrier correspandent " . $id_courrier);

    }

    public function findAllTypeCourrier() {

       $sql = "SELECT * FROM type_courrier";
       $result= $this->getDb()->fetchAll($sql);

       $types = [];
       foreach ($result as $type) {
            $types[$type['libelle_courrier']] = $type['libelle_courrier'];
       }


       return $types;



       #return ['normal', 'recommandé'];
    }

    public function findClient(){

        $sql="SELECT id_client, nom_client FROM client";
        $resultat=$this->getDb()->fetchAll($sql);

        $clients = [];

        foreach ($resultat as $client){
            $clients[$client['nom_client']]= $client['id_client'];
        }

        return $clients;
    }

    public function save(Courrier $courrier) {
        dump($courrier);
        $courrierData = array(
            'date_entre'=> $courrier->getDateEntre(),
            'date_sortie'=> $courrier->getDateSortie(),
            'annotation'=>$courrier->getAnnotation(),
            'scan'=>$courrier->getScan(),
            'fax'=> $courrier->getFax(),
            'id_type_courrier'=>$courrier->getIdTypeCourrier()[0],
            'id_client'=>$courrier->client[0]

            );

        if ($courrier->getIdCourrier()) {
            // The article has already been saved : update it
            $this->getDb()->update('courrier', $courrierData, array('id_courrier' => $courrier->getIdCourrier()));
        } else {
            // The article has never been saved : insert it
            $this->getDb()->insert('courrier', $courrierData);
            // Get the id of the newly created article and set it on the entity.
            $id_courrier = $this->getDb()->lastInsertId();
            $courrier->setIdCourrier($id_courrier);
        }
    }


    public function delete($id_courrier) {
        // Delete the article
        $this->getDb()->delete('courrier', array('id_courrier' => $id_courrier));
    }


    protected function buildDomainObject(array $row) {
        $courrier = new Courrier();
        $courrier->setIdCourrier($row['id_courrier']);
        $courrier->setDateEntre($row['date_entre']);
        $courrier->setAnnotation($row['annotation']);
        $courrier->setDateSortie($row['date_sortie']);
        $courrier->setScan($row['scan']);
        $courrier->setIdClient($row['id_client']);
        $courrier->setIdTypeCourrier($row['id_type_courrier']);

        return $courrier;
    }


}
