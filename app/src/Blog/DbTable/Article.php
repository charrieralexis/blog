<?php

namespace Blog\DbTable;

/**
 * CRUD
 * 
 * C REATE
 * R EAD
 * U PDATE
 * D ELETE
 * 
 */

use Ipf\Db\Connection\Pdo;

class Article
{
    private $db;

    public function __construct(Pdo $db)
    {
        $this->db = $db;
    }

    public function getDb()
    {
        return $this->db->getDb();
    }

    public function add(\Blog\Article $article)
    {
        $sql = "INSERT INTO article
                VALUES(
                    NULL,
                     ". $this->getDb()->quote($article->getTitle()) .",
                     ". $this->getDb()->quote($article->getTeaser()) . ",
                     ". $this->getDb()->quote($article->getContent()) .",
                    '". $article->getCreated() ."',
                    '". $article->getUpdated() ."',
                    '". $article->isActive() ."',
                     ". $article->getCategory()->getId() .")";

        return $this->getDb()->exec($sql);
    }

    public function update(\Blog\Article $article)
    {
        
    }

    public function findAll()
    {
        $sql = $this->getSqlArticle();

        $query    = $this->getDb()->query($sql);
        $result   = $query->fetchAll(\PDO::FETCH_ASSOC);
        $articles = array();

        foreach ($result as $a) {
            $articles[] = $this->rowToObject($a);
        }
        return $articles;
    }

    public function findById($id)
    {
        $sql  = $this->getSqlArticle();
        $sql .= " WHERE art_id=" . (int) $id;

        $query = $this->getDb()->query($sql);
        $result = $query->fetch(\PDO::FETCH_ASSOC);

        if ($result) {
            return $this->rowToObject($result);
        }

        return null;
    }

    public function delete(Blog\Article $article)
    {
        
    }

    public function rowToObject(array $row)
    {
        $article = new \Blog\Article();
        $article->setId($row['art_id'])
                ->setTitle($row['art_title'])
                ->setTeaser($row['art_teaser'])
                ->setContent($row['art_content'])
                ->setCreated($row['art_created'])
                ->setUpdated($row['art_updated'])
                ->setActive($row['art_is_active']);

        if (isset($row['cat_id'])) {
            $category = new \Blog\Category();
            $category->setId($row['cat_id'])
                    ->setName($row['cat_name'])
                    ->setActive($row['cat_is_active']);

            $article->setCategory($category);
        }

        return $article;
    }

    protected function getSqlArticle()
    {
        $sql = "SELECT *
                FROM article AS a
                JOIN category AS c
                ON c.cat_id = a.category_cat_id";

        return $sql;
    }
}