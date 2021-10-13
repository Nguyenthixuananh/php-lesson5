<?php
//viết code để định nghĩa lớp hình trụ bao gồm các
// thuộc tính, phương thức riêng đặc trưng và kế thừa
// các thuộc tính và phương thức từ lớp hình tròn.
class Cylinder extends Circle {
    public int $height;
    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea()*2 + parent::calculatePerimeter()*$this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea()*$this->height;
    }
}