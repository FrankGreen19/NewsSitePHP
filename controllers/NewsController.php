<?php

require_once(ROOT . '/components/View.php');
require_once(ROOT . '/repos/NewsRepository.php');

class NewsController
{
    public function actionIndex() {
        $newsList = NewsRepository::getFreshNews();
        View::render("main", $newsList);
        return true;
    }

    public function actionArticle($article_id) {
        $data = NewsRepository::getArticle($article_id);
        View::render("article", $data);
    }
}