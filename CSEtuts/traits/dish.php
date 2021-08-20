<?php
require_once 'Traits.php';

class Dish{
    public function vegetables(){
        echo "I am from vegetable";
    }

    public function bread(){
        echo "I am from bread";
    }
}

class Dish2 extends Dish{
    use sweet;
}

