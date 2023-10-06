<?php

namespace src\Controllers;

class MainController{
    public function main(){
        echo 'Hello, World';
    }
    public function sayHello(string $name){
        echo 'Hello, '.$name;
    }
}