<?php

namespace Services;

class Db{
    private $pdo;

    public function __construct(){
        $dbOptions = require('../src/settings.php');
        $this->pdo = new \PDO(
            'mysql:host='.$dbOptions['host'].';dbname='.$dbOptions['dbname'],
            $dbOptions['username'],
            $dbOptions['password'],
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public function query(string $sql, $params = []):?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if (!$result) //if($result === false)
        {
            return null;
        }
        return $sth->fetchAll();
    }
}