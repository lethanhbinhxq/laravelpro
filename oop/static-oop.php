<?php
class Rectangle {
    public static $width;
    public static $height;

    public static function getPerimeter() {
        return 2 * (self::$width + self::$height);
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}
Rectangle::$width = 10;
Rectangle::$height = 12;
echo Rectangle::getPerimeter();
?>