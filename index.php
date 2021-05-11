<?php

    //FRONT CONTROLLER

    //Общие настройки
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
        header('Access-Control-Allow-Headers: token, Content-Type');
        header('Access-Control-Max-Age: 1728000');
        header('Content-Length: 0');
        header('Content-Type: text/plain');
        die();
    }
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    //Подключение файлов системы
    define("ROOT", dirname(__FILE__));
    require_once (ROOT . '/components/Router.php');

    //Вызов Router
    $router = new Router();
    $router -> run();