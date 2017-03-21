<?php
namespace Magicc;

class Voke {
    public function __invoke($length, $hidden) {
        $this->length = $length;
        $this->hidden = $hidden;
        return 'Length canged to'.' '. $this->length. 'and hidden changed to'.' '. $this->hidden;
      
    }
    
    
}

