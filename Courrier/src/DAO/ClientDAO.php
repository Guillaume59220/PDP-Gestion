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
        return $result;
    }


    public function findAllByClient($id_client)
    {

        $sql = "select * from clients where id_client=? order by id_client";
        $result = $this->getDb()->fetchAll($sql, array($id_client));

        return $result;
    }


    public function find($id_client)
    {
        $sql = "select nom_client,code_client from clients where id_client=?";
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


    public function save(Client $client) {
        $clientData = array(
            'nom_client' => $client->getNomClient(),
            'code_client' => $client->getCodeClient()
        );

        if ($client->getIdClient()) {
            // The user has already been saved : update it
            $this->getDb()->update('clients', $clientData, array('id_client' => $client->getId()));
        } else {
            // The user has never been saved : insert it
            $this->getDb()->insert('clients', $clientData);
            // Get the id of the newly created user and set it on the entity.
            $id_client = $this->getDb()->lastInsertId();
            $client->setIdClient($id_client);
        }
    }


    protected function buildDomainObject(array $row)
    {

    }
}
