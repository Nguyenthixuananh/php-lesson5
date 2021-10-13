<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$point=new Point(10,10);
echo "Point:<br> ";
$point->toString();
echo "<br/>";

$move=new MoveablePoint(15,20,15,20);
echo "<br/>";
echo "Move able Point: ";
echo "<br/>";
$move->toString();
$move->move();
