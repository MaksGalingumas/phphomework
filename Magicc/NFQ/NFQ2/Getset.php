<?php
namespace Magicc\NFQ\NFQ2;

class Getset{
    protected $pasleptas = 'Default';
    public $cloned = FALSE;
    
    public function __get($name){
        return $this->$name;
    }
    public function __set($name, $value){
        $this->$name = $value;
    }
    public function __isset($name) {
        return isset($name);
    }
    public function __unset($name){
        unset($this->$name);
    }
    public function __toString() {
        return 'To string called';  
    }
    public function __invoke($pasleptas) {
        $this->pasleptas = $pasleptas;
        return 'Pasleptas buvo pakeistas i' .' '. $this->pasleptas;
    }
    public function __clones(){
        $this->cloned = TRUE;
    }
     
    
 
}


