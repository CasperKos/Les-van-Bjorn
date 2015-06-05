<?php

namespace Pragtig\infrastructure;


use Pragtig\business\Article;

class ArticleRepository {

    private $connection;

    public function __construct(DbConnection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param Article $article
     */
    public function persist(Article $article)
    {
        $this->connection->persist($article);
    }
}