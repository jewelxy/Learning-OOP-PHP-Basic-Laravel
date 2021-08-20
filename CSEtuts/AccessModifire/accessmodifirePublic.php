<?php
/*
Public:
		i) They may be accessed in three possible situations
		ii) From outside the class in which it is declared
		iii)From within the class in which it is declared
		iv) From within another class that implements the class in which it is declared.
*/
class Food{
    public $Fname; 
   // private $Fname; //Cannot access private property Food::$Fname
    function showData(){
        echo "Item is : ".$this->Fname."<br/>";
    }
}

$f1 = new Food();
$f1->Fname="Pizza";
$f1->showData();