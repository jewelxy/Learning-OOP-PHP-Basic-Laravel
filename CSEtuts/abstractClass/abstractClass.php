<?php
abstract class Speak{
    //Can not create abstract class object it's inherit from child
  public abstract  function sayHello();

  public function hiHello(){
      echo "Hi ! Developer "."<br/>";
  }
}

class userTalk extends speak{

    public function sayHello(){
        echo "Hello all User"."<br/>";
    }
}

$tell = new userTalk();
$tell->sayHello();
$tell->hiHello();