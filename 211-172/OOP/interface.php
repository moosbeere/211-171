<?php

class Rectangle implements calculateSquare{
    public $x;
    public $y;

    public function __construct(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }   

    public function calculateSquare():float
    {
        return $this->x * $this->y;
    }
}

class Square {
    public $x;

    public function __construct(float $x){
        $this->x = $x;
    }   

    public function calculateSquare():float
    {
        return $this->x ** 2;
    }
}

class Circle implements calculateSquare{
    public $r;
    const PI = 3.14;

    public function __construct(float $r){
        $this->r = $r;
    }
    public function calculateSquare():float
    {
       return self::PI * ($this->r ** 2);   
    }
}

interface calculateSquare{
    public function calculateSquare():float;
}

$array = [
   $rec = new Rectangle(7,6),
   $squar = new Square(7),
   $circle = new Circle(6)
];

foreach($array as $ob)
if ($ob instanceof calculateSquare){
    echo $ob->calculateSquare();
    echo '<br>';
}





