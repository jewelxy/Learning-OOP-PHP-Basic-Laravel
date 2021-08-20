<?php
class Pen{
   private $duty = "write ";

    
    function penfunction(){
        echo $this->duty;
    }
}

class RedPen extends Pen{
   private $responsibility = "Red color";

    function redpenFun(){
        echo $this->responsibility;
    }
}
class EconBall extends RedPen{
    function econfun(){
        echo "well,";
    }
}

//$objRedPen = new RedPen();
//$objRedPen->penfunction();
//$objRedPen->redpenFun();

$objEcon = new EconBall();
$objEcon->penfunction();
