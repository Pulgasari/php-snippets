<?php

$arr = ["a", "b", "c"];
$obj = (object) $arr;

/////////////

class MyStringClass {
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function random ( int $length = 10 ) {
        echo $this->var;
    }
    
    public function lowercase(){ strtolower($this->str); }
    public function uppercase(){ strtoupper($this->str); }
}

function str( str $string ){
  return new MyStringClass;
}

$key = str('0123456789')->random(9);

?>