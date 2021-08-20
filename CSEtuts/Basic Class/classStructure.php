<?php

class Student{
    private $sName, $sRoll;

    function getDeatails($name,$roll){
        $this->sName=$name;
        $this->sRoll=$roll;
    }

    function showData(){
        echo "Name : ".$this->sName." Roll: - ". $this->sRoll;   
     }
}

$stu1 = new Student();
$stu1 = getDeatails("Jewel",556);
$stu1 = showData();


 /*

class student{
        private $name, $contactNo;

        function getDeatails($n,$c){
            $this->name=$n;
            $this->contactNo=$c;
        }


        function showDetails(){
            echo "Name : ".$this->name." Contact No:- ".$this->contactNo;
        }
}

$jewelInfo = new student();

$jewelInfo-> getDeatails("Jewel Rana","01737512372");

$jewelInfo->showDetails();

*/