<?php
/*
Protected:
i)A protected property or method is accessible in the class in which it is declared, as well as in classes
that extend that class.
ii)But for child class it becomes private member.
*/
class Food{
    protected $Fname;
    public function getName($name){
        $this->Fname=$name;
    }

    function showData(){
        echo "Item is : ".$this->Fname."<br/>";
    }
}

class JunkFood extends Food{
    function passValue(){
        $this->Fname="Potato Cheeps";
    }
}

$JF = new JunkFood();
$JF->passValue();
$JF->showData();