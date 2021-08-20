<?php
class Car{
    public function StartCar(){
        echo "The car is started";
    }
}
//Same method name is calling in child and parent class but different argument
class SportsCar extends Car{
    public function StartCar(){
        echo "The sports car started with self Start";
    }
}

$SpCar = new SportsCar();
$SpCar->StartCar();