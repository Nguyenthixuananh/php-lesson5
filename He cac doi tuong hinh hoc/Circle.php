<?php
//viết code định nghĩa lớp hình tròn
// được kế thừa các thuộc tính và phương thức từ lớp hình học.
class Circle extends Shape {
    public $radius;

    /**
     * @param float|int $radius
     */
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi()* pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi()*$this->radius*2;
    }

}
