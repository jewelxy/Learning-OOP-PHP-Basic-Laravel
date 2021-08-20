<?php
/*
Private:
i)They are only accessible for the class in which they are declared
ii)Private members are not accessible in child class while using inheritance.

*/
class Food{ 
   private $Fname;
   function getData($name){
       $this->Fname=$name;

   }
    function showData(){
        echo "Item is : ".$this->Fname."<br/>";
    }
}
class JunkFood extends Food{
        private $JFname="Sandwitch";

        function passValue(){
            $this->getData($this->JFname);
        }
}

$f1 = new Food();
$f1->getData("Pizza");
$f1->showData();

$jf = new JunkFood();
$jf->passValue();
$jf->showData();