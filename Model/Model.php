<?php
namespace Model;

abstract class Model {
    protected $dbConnect;
    function __construct()
    {
        $user = 'root';
        $pass = 'root';
        try {
            $this->dbConnect = new \PDO('mysql:host=localhost;dbname=mvc', $user, $pass,
            [
                \PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ]);
        } catch (\PDOException $e){
            throw new \PDOException($e->getMessage(), $e->getCode());
        }
    }
}