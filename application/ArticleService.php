<?php

namespace Pragtig\application;

use Pragtig\business\Article;
use Pragtig\infrastructure\ArticleRepository;

class ArticleService
{
    /**
     * @var ArticleRepository
     */
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function placeArticle(array $article)
    {
        $article = new Article();
        $article->setContent($article['content']);
        $article->setName($article['name']);

        $this->articleRepository->persist($article);

        return $article->getId();
    }

}