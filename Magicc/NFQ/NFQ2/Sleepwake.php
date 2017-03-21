<?php
namespace Magicc\NFQ\NFQ2;

class Sleepwake{
    public $length;
    public function __sleep(){
        $this->length = 0;
        return['length'];
    }
    public function __wakeup(){
        $this->length = 6;
    }
}
