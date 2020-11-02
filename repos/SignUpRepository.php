<?php
    require_once(ROOT . '/components/DBConnection.php');

class SignUpRepository
{
    public static function insertUser($email, $password, $passwordRepeat, $country) {
        $connection = DBConnection::getDbConnection();

        if ($password == $passwordRepeat) {
            $query = "INSERT INTO client(client_email, client_password, client_country) VALUES('$email', '$password', '$country')";
            return pg_query($query);
        }

        pg_close($connection);
        return false;
    }
}