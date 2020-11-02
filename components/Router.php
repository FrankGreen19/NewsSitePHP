<?php


class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = require_once(ROOT . '/config/routes.php');
    }

    private static function getURI() {
        if (!empty($_SERVER['REQUEST_URI']))
            return trim($_SERVER['REQUEST_URI'], '/');
    }

    public function run() {
        $uri = self::getURI();

        foreach ($this -> routes as $uriPattern => $path) {

            if (preg_match("~$uriPattern~", $uri)) {

                //получить внутренний путь из внешнего согласно правилу
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                //определить контроллер, экшн и параметры
                $segments = explode('/', $internalRoute);

                $controllerName = ucfirst(array_shift($segments)."Controller");
                $actionName = "action".ucfirst(array_shift($segments));
                $parameters = $segments;

                //Подключить файл контроллера
                $controllerFile = ROOT . "/controllers/" . $controllerName . ".php";
                if (file_exists($controllerFile))
                    include_once ($controllerFile);

                //Содание объекта и вызов метода
                $controllerObject = new $controllerName;

                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result != null)
                    break;
            }
        }
    }


}