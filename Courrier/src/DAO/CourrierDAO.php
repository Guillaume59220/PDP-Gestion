<?php

namespace MicroCMS\DAO;

use Courrier\Domain\Courrier;

class CourrierDAO extends DAO
{
    public function findAll() {
        $sql = "select * from view_courrier order by id_courrier desc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $articles = array();
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
            $this->getDb()->insert('t_article', $courrierData);
            // Get the id of the newly created article and set it on the entity.
            $id = $this->getDb()->lastInsertId();
            $article->setId($id);
        }
    }

    /**
     * Removes an article from the database.
     *
     * @param integer $id The article id.
     */
    public function delete($id) {
        // Delete the article
        $this->getDb()->delete('t_article', array('art_id' => $id));
    }

    /**
     * Creates an Article object based on a DB row.
     *
     * @param array $row The DB row containing Article data.
     * @return \MicroCMS\Domain\Article
     */

    protected function buildDomainObject(array $row) {
        $article = new Article();
        $article->setId($row['art_id']);
        $article->setTitle($row['art_title']);
        $article->setContent($row['art_content']);
        return $article;
    }
}
