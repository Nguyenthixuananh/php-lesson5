<?php
//code định nghĩa lớp hình chữ nhật được kế thừa
// các thuộc tính và phương thức từ lớp hình học.
 class Rectangle extends Shape {
     public $width;
     public $height;
     public function __construct(string $name, $width, $height)
     {
         parent::__construct($name);
         $this->width = $width;
         $this->height = $height;
     }

     public function calculateArea()
     {
         return $this->height*$this->width;
     }

     public function calculatePerimeter()
     {
         return ($this->height+ $this->width)*2;
     }
 }