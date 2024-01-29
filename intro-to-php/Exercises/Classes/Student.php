<?php

class Student {

    public $name;
    public $number;

public function __construct($nm, $num) {
    $this->name = $nm;
    $this ->number =  $num;
}

public function __toString() {
    $format = "The student's name is %s, %s";
    $str = sprintf(
        $format,
        $this -> name,
        $this -> number,
    );
    return $str;
}

}


?>