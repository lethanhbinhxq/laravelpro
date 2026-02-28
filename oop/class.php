<?php
class Rectangle {
    public $width;
    public $height;

    public function __construct() {
        $this->width = 20;
        $this->height = 10;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->height);
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

$a = new Rectangle();
// $a->height = 5;
// $a->width = 4;

echo $a->getPerimeter();
echo " " . $a->getArea();
?>