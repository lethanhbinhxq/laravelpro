<?php

class A {
    public $attr_1;
    public function method_1() {
        echo "OK";
    }
}

class B extends A {}

$b = new B();
$b->method_1();