<?php
/*
class Student{
    private $stuName;
}

$rahim = new Student();
$rahim->stuName="Rahim";

*/

/*
Above code notice: 
 Uncaught Error: Cannot access private property Student::$stuName
*/

//Clearify Below

class Student{
    private $stuName;

    function getData($sName){
            $this->stuName=$sName;
    }
    function showData(){
        echo "His name is: ".$this->stuName;
    }
}

$rahim = new Student();
$rahim->getData("Rahim");
$rahim->showData();