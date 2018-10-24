<?php
namespace Model;

abstract class Model {
    protected $dbConnect;
    function __construct()
    {
        try {
            $this->dbConnect = new \PDO('mysql:host=localhost;dbname=mvc', 'root', '0000',[
                \PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ]);
        } catch (\PDOException $e){
            throw new \PDOException($e->getMessage(), $e->getCode());
        }
    }
}