<?php
namespace Magicc\NFQ;
use Exception;

class Condes{
    public $title;
    
    public function __construct($title) {
        $this->title = $title;
    }
    public function __destruct() {
        throw new Exception('Sunaikintas');
    }
}

