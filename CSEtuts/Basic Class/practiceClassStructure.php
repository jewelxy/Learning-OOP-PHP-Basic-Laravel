<?php
    class Family{
        private $primaryParents,$numberMember,$situation;

        function getData($p,$n,$s){
                    $this->primaryParents=$p;
                    $this->numberMember=$n;
                    $this->situation=$s;
        }

        function showData(){
            echo "Primary Parents : ".$this->primaryParents."<br/>";
            echo "Total Family Member : ".$this->numberMember."<br/>";
            echo "Present Family Condition : ".$this->situation."<br/>";
        }
    }

    $objdhfam = new Family();
    $objdhfam->getData("Abdur Rahim","10","Sorrounding Poverty Line");
    $objdhfam->showData();