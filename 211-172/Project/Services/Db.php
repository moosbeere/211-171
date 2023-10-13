<?php

namespace Services;

class Db{
    private $pdo;
    private static $instance;

    protected function __construct(){
        $dbOptions = require('settings.php');
        $this->pdo = new \PDO(
            'mysql:host='.$dbOptions['host'].';dbname='.$dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password'],
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public function query(string $sql, $params=[], string $className='stdClass'):?array{
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);
        if($result === false) return null;
        return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
    }

    public static function getInstance(){
        if (self::$instance === null){
            return self::$instance = new self();
        }
        return self::$instance;
    }
}