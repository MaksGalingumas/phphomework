<?php
namespace Magicc\NFQ;

class Call{
    protected function nfq1(){
        return 'NFQ Skambina';
    }
    protected static function nfq2(){
        return 'Vel NFQ skambina statiskai';
    }
    public function __call($name, $arguments){
        return call_user_func_array(array($this, $name), $arguments);
    }
    public static function __callStatic($name, $arguments) {
        return call_user_func_array(array(__CLASS__,$name), $arguments);
    }






}


