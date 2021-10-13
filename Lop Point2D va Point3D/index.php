<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2d = new Point2D(10,20);
$point2d->toString();
echo "<br/>";
echo "X = ".$point2d->getX()."<br/>";
echo "Y = ".$point2d->getY()."<br/>";
var_dump($point2d->getXY());
echo "<br/>";

$point3d = new Point3D(10, 20, 30);
$point3d->toString();
echo "<br/>";
echo "X = ".$point3d->getX()."<br/>";
echo "Y = ".$point3d->getY()."<br/>";
echo "Z = ".$point3d->getZ()."<br/>";
var_dump($point3d->getXYZ());
