<?php
namespace Models;

abstract class ClassConexao{

    protected function conectaDB()
    {
        try{
            $con=new \PDO("mysql:host=localhost;dbname=sistema","root","");
            return $con;
        } catch (\PDOException $erro) {
            return $erro->getMessage();
        }
    }
}