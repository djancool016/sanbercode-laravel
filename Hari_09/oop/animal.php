<?php
class Animal{
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    function __construct($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}
require_once "ape.php";
require_once "frog.php";
?>