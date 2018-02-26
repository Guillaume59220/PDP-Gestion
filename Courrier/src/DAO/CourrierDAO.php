<?php

namespace Courrier\DAO;

use Courrier\Domain\Courrier;

class CourrierDAO extends DAO
{
    public function findAll() {
        $sql = "select * from view_courrier order by id_courrier desc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $courriers = array();
        foreach ($result as $row) {
            $courrierId = $row['id_courrier'];
            $courriers[$courrierId] = $this->buildDomainObject($row);
        }
        return $courriers;
    }

    public function find($id_courrier) {
        $sql = "select * from view_courrier where id_courrier =?";
        $row = $this->getDb()->fetchAssoc($sql, array($id_courrier));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("Pas de courrier corresprndent " . $id_courrier);
    }

    public function save(Courrier $courrier) {
        $courrierData = array(
            'No' => $courrier->getId(),
            '' => $courrier->getContent(),
            );

        if ($courrier->getId()) {
            // The article has already been saved : update it
            $this->getDb()->update('courrier', $courrierData, array('id_courrier' => $courrier->getId()));
        } else {
            // The article has never been saved : insert it
            $this->getDb()->insert('courrier', $courrierData);
            // Get the id of the newly created article and set it on the entity.
            $id_courrier = $this->getDb()->lastInsertId();
            $courrier->setId($id_courrier);
        }
    }


    public function delete($id_courrier) {
        // Delete the article
        $this->getDb()->delete('courrier', array('id_courrier' => $id_courrier));
    }


    protected function buildDomainObject(array $row) {
        $courrier = new Courrier();
        $courrier->setId($row['id_courrier']);
        $courrier->setDateEntre($row['date_entre']);
        $courrier->setAnnotation($row['annotation']);
        $courrier->setDateSortie($row['date_sortie']);
        $courrier->setScan($row['scan']);

        return $courrier;
    }
}
