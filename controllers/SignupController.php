<?php
    require_once(ROOT . '/components/View.php');
    require_once(ROOT . '/repos/SignUpRepository.php');

class SignupController
{
    public function actionIndex() {
        $result = [];
        $result['title'] = "";
        $result['color'] = "";

        View::render("signuppage", $result);
    }

    public function actionInsertClient() {
        $result = [];

        if (isset($_POST['emailField'])) {
            $email = htmlentities(pg_escape_string($_POST['emailField']));
            $password = htmlentities(pg_escape_string($_POST['passwordField']));
            $passwordRepeat = htmlentities(pg_escape_string($_POST['passwordRepeatField']));
            $country = ($_POST['countryField']);


            if (SignUpRepository::insertUser($email, $password, $passwordRepeat, $country)) {
                $result['title'] = "Успешно!";
                $result['color'] = "#75ff70";
            } else {
                $result['title'] = "Некорректные данные";
                $result['color'] = "#ff6969";
            }

        }

        View::render("signuppage", $result);
    }
}