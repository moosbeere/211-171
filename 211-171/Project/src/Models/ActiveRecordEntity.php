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
        $db = Db::getInstance();
        $sql = 'SELECT * FROM `'.static::getTableName().'`';
        $articles = $db->query($sql, [], static::class);
        return $articles;
    }

    public static function getById(int $id): ?self
    {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM `'.static::getTableName().'` WHERE `id`=:id';
        $entyties = $db->query($sql, [':id' => $id], static::class);
        return $entyties ? $entyties[0] : null;
    }

    public static function where(int $entityId, string $nameField){
        $db=Db::getInstance();
        $sql = 'SELECT * FROM `'.static::getTableName().'` WHERE `'.$nameField.'`=:entityId';
        $entyties = $db->query($sql, [':entityId' => $entityId], static::class);
        return $entyties;
    }
    
    private  function mapToDbProperties():array
    {
        $reflector = new \ReflectionObject($this);
        $prorerties = $reflector->getProperties();
        foreach($prorerties as $property){
            $mapped [] = $this->camelcaseToUnderScore($property->getName());
        }
        return $mapped;
    }
    private function camelcaseToUnderscore(string $name){
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $name));
    }

    public function save(){
        $proprtiesName = $this->mapToDbProperties();
        var_dump($proprtiesName);
    }
    abstract static function getTableName();
}