<?php

namespace Courrier\DAO;

use Courrier\Domain\Client;
use Courrier\DAO\CourrierDAO;

class ClientDAO extends DAO
{


    public function findAll()
    {
        $sql = "select * from clients order by id_client desc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $entities = array();
        foreach ($result as $row) {
            $id_client = $row['id_client'];
            $entities[$id_client] = $this->buildDomainObject($row);
        }
        return $entities;
    }


    public function findAllByClient($id_client)
    {

        $sql = "select * from view_client where id_client=? order by id_client";
        $result = $this->getDb()->fetchAll($sql, array($id_client));

        $comments = array();
        foreach ($result as $row) {
            $clientId = $row['id_client'];
            $client = $this->buildDomainObject($row);
            // The associated article is defined for the constructed comment
            $client->setCourrier($client);
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


    public function delete($id_client)
    {
        // Delete the comment
        $this->getDb()->delete('client', array('id_client' => $id_client));
    }


    protected function buildDomainObject(array $row)
    {

    }
}
