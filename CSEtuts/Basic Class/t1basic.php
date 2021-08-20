<?php
//Example Of class in PHP

Class Student{
    private $name,$contactNo;

    function getDetails($n,$c){
        $this->name=$n;
        $this->contactNo=$c;

    }

    function showDetails(){
        echo $this->name."<br/>";
        echo $this->contactNo."<br/>";
    }
}

$stu1 = new Student();
$stu1->getDetails("Jewel",12345);
$stu1->showDetails();