<?php

class Animal{
    private $Classification;
    private $Numb_of_limbs;

    public function get(){
        return "Classification: $this->Classification\nNumb of limbs: $this->Numb_of_limbs\n";
    }
    function __construct($Classification, $Numb_of_limbs){
        $this->Classification = $Classification;
        $this->Numb_of_limbs = $Numb_of_limbs;
    }
    function __destruct(){
        echo "<br>destructor for Animal";
    }
}



?>