<?php

namespace Pragtig\presentation\web\controllers;


use Pragtig\application\ArticleService;

class ArticleController
{

    /**
     * @var ArticleService
     */
    private $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function create($input = [])
    {
        if (count($input) > 0) {
            $articleId = $this->articleService->placeArticle($input);
        } else {
            return require_once (__DIR__ . '../view/view.html');
        }
    }
}