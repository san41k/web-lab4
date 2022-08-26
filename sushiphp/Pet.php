<?php

class Pet extends Animal{
    private $Name;

    public function getInfo(){
        return parent::getInfo() . "Name: $this->Name\n";
    }
    function __construct($Classification, $Numb_of_limbs, $Name){
        parent::__construct($Classification, $Numb_of_limbs);
        $this->Name = $Name;
    }
    function __destruct(){
        echo "<br>destructor for Pet";
    }
}
?>

