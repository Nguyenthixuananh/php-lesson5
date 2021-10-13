<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle(5,"blue");
$circle->toString();
echo "<br/>";
echo 'Circle area: '.$circle->calculateArea().'<br/>';
echo 'Circle perimeter: '.$circle->calculatePerimeter().'<br/>';
echo "<br/>";


$cylinder = new Cylinder(6,"red", 7);
$cylinder->toString();
echo "<br/>";
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder Volume '.$cylinder->calculateVolume();