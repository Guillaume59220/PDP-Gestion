<?php

namespace Courrier\DAO;

use Courrier\Domain\Client;
use Courrier\DAO\CourrierDAO;

class ClientDAO extends DAO
{

    private $courrierDAO;


    private $userDAO;

    public function setCourrierDAO(CourrierDAO $courrierDAO)
    {
        $this->courrierDAO = $courrierDAO;
    }

    public function setUserDAO(UserDAO $userDAO)
    {
        $this->userDAO = $userDAO;
    }


    public function findAll()
    {
        $sql = "select * from courrier order by id_courrier desc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $entities = array();
        foreach ($result as $row) {
            $id_courrier = $row['id_courrier'];
            $entities[$id_courrier] = $this->buildDomainObject($row);
        }
        return $entities;
    }


    public function findAllByClient($id_client)
    {

        $courrier = $this->courrierDAO->find($id_client);


        $sql = "select * from view_courrier where id_courrier=? order by id_client";
        $result = $this->getDb()->fetchAll($sql, array($id_client));

        $comments = array();
        foreach ($result as $row) {
            $clientId = $row['id_client'];
            $client = $this->buildDomainObject($row);
            // The associated article is defined for the constructed comment
            $client->setCourrier($courrier);
        }
        return $client;
    }


    public function find($id_client)
    {
        $sql = "select id_client,nom_client,code_client from clients where id_client=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id_client));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("Pas de courrier corespendent client " . $id_client);
    }


    public function delete($id_courrier)
    {
        // Delete the comment
        $this->getDb()->delete('courrier', array('id_courrier' => $id_courrier));
    }


    protected function buildDomainObject(array $row)
    {

    }
}
