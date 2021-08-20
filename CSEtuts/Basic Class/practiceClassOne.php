<?php
class Car{
        private $name,$color;

        function getDetails($cN,$cC){
            $this->name=$cN;
            $this->color=$cC;
        }

        function showData(){
            echo "The car is : ".$this->name."<br/>";
            echo "Car Color is : ".$this->color."<br/>";
        }
}

$objCar = new Car();    // Object is an instance/instantiation of class.
$objCar->getDetails("BMW","Black");
$objCar->showData();