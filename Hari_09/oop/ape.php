<?php
class Ape extends Animal{
    public $legs = 2;
    public $yell = "Auooo";

    function set_yell($yell){
        $this->yell = $yell;
    }
    function yell(){
        return $this->yell;
    }
}

?>