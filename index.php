<?php

class Car {

    public $brand;

    public function __construct($brand){
        $this->brand = $brand;
    }

    public function start(){
        return $this->brand . " started!";
    }
}

$car = new Car("BMW");

echo $car->start();

?>