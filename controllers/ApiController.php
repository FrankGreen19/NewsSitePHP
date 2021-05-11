<?php

require_once ROOT . '/components/MySQLConnection.php';

class ApiController
{
    public static function actionSelectAll() {
        $connection = MySQLConnection::getConnection();
        $data = $connection->query("SELECT * FROM forms")->fetch_all(MYSQLI_ASSOC);
        $connection->close();
        echo json_encode($data);
    }

    public static function actionSelect($id) {
        $connection = MySQLConnection::getConnection();
        $data = $connection->query("SELECT * FROM forms WHERE id = $id")->fetch_all(MYSQLI_ASSOC);
        $connection->close();
        echo json_encode($data);
    }

    public static function actionInsert() {
        $form = json_decode(file_get_contents("php://input"));

        if ($form) {
            $connection = MySQLConnection::getConnection();
            $result = $connection->query("INSERT INTO forms(fio, email, phone, message, status)
                                                VALUES ('$form->fio', '$form->email',
                                                        '$form->phone',
                                                        '$form->message', '$form->status')");
            if ($result) {
                $data = $connection->query("SELECT * FROM forms WHERE id = (SELECT MAX(id) FROM forms)")->fetch_all(MYSQLI_ASSOC);
                echo json_encode($data);
            } else {
                http_response_code(500);
            }
            $connection->close();
        } else {
            http_response_code(404);
        }
    }

    public static function actionUpdate($id) {
        $form = json_decode(file_get_contents("php://input"));

        if ($id && $form) {
            $connection = MySQLConnection::getConnection();
            $result = $connection->query("UPDATE forms SET
                                                fio = '$form->fio', email = '$form->email',
                                                phone = '$form->phone',
                                                message = '$form->message', status = '$form->status'
                                                WHERE id = $id");
            if ($result) {
                $data = $connection->query("SELECT * FROM forms WHERE id = $id")->fetch_all(MYSQLI_ASSOC);
                echo json_encode($data);
            } else {
                http_response_code(500);
            }
            $connection->close();
        } else {
            http_response_code(404);
        }
    }

    public static function actionUpdateStatus($id) {
        $form = json_decode(file_get_contents("php://input"));

        if ($id && $form) {
            $connection = MySQLConnection::getConnection();
            $result = $connection->query("UPDATE forms 
                                                SET status = '$form->status'
                                                WHERE id = $id");
            if ($result) {
                $data = $connection->query("SELECT * FROM forms WHERE id = $id")->fetch_all(MYSQLI_ASSOC);
                echo json_encode($data);
            } else {
                http_response_code(500);
            }
            $connection->close();
        } else {
            http_response_code(404);
        }
    }

    public static function actionDelete($id) {
        if ($id) {
            $connection = MySQLConnection::getConnection();
            $data = $connection->query("SELECT * FROM forms WHERE id = $id")->fetch_all(MYSQLI_ASSOC);
            $result = $connection->query("DELETE FROM forms WHERE id = $id");
            if ($result) {
                echo json_encode($data);
            } else {
                http_response_code(500);
            }
            $connection->close();
        } else {
            http_response_code(404);
        }
    }

}