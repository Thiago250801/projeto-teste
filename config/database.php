<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

class Database {

    public function conectar(){

        try{

            $conn = new PDO(
                "mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'],
                $_ENV['DB_USER'],
                $_ENV['DB_PASS']
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch(PDOException $e){

            echo "Erro: " . $e->getMessage();

        }

    }

}