<?php

namespace App;

class Connection {

    public static function getDb() {

        try {

            $conn = new \PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                ""
            );

            return $conn;

        } catch(\PDOException $e) {

            echo "Ocorreu um erro na tentativa de conexão ao Banco de Dados ($e)";

        }
    }

}







?>
