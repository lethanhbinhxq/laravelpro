<?php

class Demo{ 
    public $attr_1;
    private $attr_2;
    protected $attr_3 = 40;

    public function show() {
        return $this->attr_1;
    }
}

$a = new Demo();
$a->attr_1 = 10;
echo $a->show();

class User extends Demo {
    function __construct() {
        echo $this->attr_3;
    }
}

$user = new User();