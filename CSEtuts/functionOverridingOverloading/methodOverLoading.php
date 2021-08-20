<?php
class AdditionClass{
    public function add($num1,$num2){
        echo ($num1+$num2);
    }
    // public function add($num1,$num2,$num3){
    //     echo ($num1+$num2+$num3);
    // }

    //Same class and same repeat method but with different argument
    //In php function overloading is not working

}
$objAdd = new AdditionClass();

$objAdd->add(5,7);