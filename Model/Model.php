<?php
namespace Model;

/**
 * Model
 */
abstract class Model {
    protected $dbConnect;
    function __construct()
    {

        try {
            $this->dbConnect = new \PDO('mysql:host=' . $GLOBALS['config']['Datasources']['host'] . ';dbname=' . $GLOBALS['config']['Datasources']['database'] . '', $GLOBALS['config']['Datasources']['username'], $GLOBALS['config']['Datasources']['password'],
            [
                \PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ]);
        } catch (\PDOException $e){
            throw new \PDOException($e->getMessage(), $e->getCode());
        }
    }
}