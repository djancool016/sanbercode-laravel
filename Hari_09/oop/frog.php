<?php
class Frog extends Animal{
    public $jump = "hop hop";

    function set_jump($jump){
        $this->jump = $jump;
    }
    function jump(){
        return $this->jump;
    }
}

?>