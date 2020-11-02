<?php


class DBConnection
{
    private static $host = 'localhost';
    private static $port = '5433';
    private static $database = 'oo_onlineshop';
    private static $user = 'postgres';
    private static $password = 'root';
    private static $dbConnection;

    private function __construct(){}

    protected function __clone(){}

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getDbConnection() {
        if (!isset(self::$dbConnection)) {
            $connectionString = "host=" . self::$host . " port=" . self::$port .
                " dbname=" . self::$database . " user=" . self::$user . " password=" . self::$password;

            self::$dbConnection = pg_connect($connectionString);
        }
        return self::$dbConnection;
    }
}