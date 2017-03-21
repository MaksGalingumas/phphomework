<?php
namespace Magicc;

class State{
    public $length=10;
    public function __set_state($array){
        $obj = new state ($array['length']);
        $obj->hidden = "SET STATE";
        return $obj;
    }
    
    
}

