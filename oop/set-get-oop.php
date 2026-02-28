<?php

class Demo {
    private $attr_1;
    public function setValue($value) {
        $this->attr_1 = $value;
    }

    public function getValue() {
        return $this->attr_1;
    }
}

$a = new Demo();
$a->setValue(10);
echo $a->getValue();