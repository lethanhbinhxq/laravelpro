<?php

class A {
    public $attr_1;
    public function method_1() {
        echo "OK";
    }
}

class B extends A {
    public $attr_2;
    public function method_2() {
        echo $this->attr_2;
    }
}

$b = new B();
$b->attr_2 = "Class B";
// $b->method_1();
$b->method_2();