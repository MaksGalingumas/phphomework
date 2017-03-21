<?php
namespace Magicc\NFQ\NFQ2;

class Debug{
    public $length=10;
    public function __debugInfo(){
        return ['length'=>$this->length];
     }
}
