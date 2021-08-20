<?php
class Parents{
     private $data;

     function parentFun(){
         echo "I am the function of my parent class";

     }
}

class Child extends Parents{
    function childFun(){
        echo "I am the function of my child Class";
    }
}

$objChild1 = new child();
//$objChild1->childFun();
$objChild1->parentFun();