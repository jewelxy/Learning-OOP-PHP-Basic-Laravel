<?php

/*
class Example{
    public function __construct(){
        echo "Hello Novice Programmer !";
    }
}

$obj = new Example();

*/

class Example{

    private $name;
    public function __construct($value){
            $this->name=$value;
    }

    public function passValue(){
        echo $this->name;
    }
}

$obj = new Example("Hello Jewel");
$obj->passValue();