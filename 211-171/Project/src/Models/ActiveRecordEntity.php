<?php

namespace src\Models;
use Services\Db;


abstract class ActiveRecordEntity{
    protected $id;

    public function __set(string $property, string $value){
        $propertyName = $this->underscoreToCamelCase($property);
        $this->$propertyName = $value;
    }

    public function underscoreToCamelCase(string $name){
        return lcfirst(str_replace('_', '', ucwords($name, '_')));
    }

    public function getId()
    {
        return $this->id;
    }

    public static function findAll():array
    {
        $db = new Db;
        $sql = 'SELECT * FROM `'.static::getTableName().'`';
        $articles = $db->query($sql, [], static::class);
        return $articles;
    }
    abstract static function getTableName();
}