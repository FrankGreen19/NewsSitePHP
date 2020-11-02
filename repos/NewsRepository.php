<?php
    require_once(ROOT . '/components/DBConnection.php');

class NewsRepository
{
    public static function getFreshNews() {
        $connection = DBConnection::getDbConnection();

        $query = "SELECT * FROM article, article_type WHERE article.article_type_id = article_type.article_type_id";

        $result = pg_query($connection, $query);

        pg_close($connection);
        return pg_fetch_all($result);
    }

    public static function getArticle($article_id) {
        $article_id = htmlentities(pg_escape_string($article_id));

        $connection = DBConnection::getDbConnection();

        $query = "SELECT * FROM article where article_id = '$article_id'";

        $result = pg_query($connection, $query);

        pg_close($connection);
        return pg_fetch_assoc($result);
    }

    public static function getNewsTypes() {
        $connection = DBConnection::getDbConnection();

        $query = "SELECT * FROM article_type";

        $result = pg_query($connection, $query);

        pg_close($connection);
        return pg_fetch_all($result);
    }

}