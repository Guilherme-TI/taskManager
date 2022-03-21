<?php

session_start();

class Conexao{
    static $pdo;
    static function conectar(){
        try{
            self::$pdo = new PDO("mysql:host=localhost; dbname=mydb", "root", "");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$pdo;
        }catch(Exception $e){
            echo $e;
        }
    }
}