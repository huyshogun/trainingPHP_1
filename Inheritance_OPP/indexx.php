<?php
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Rectangular.php";
$Circle = new Circle(3, 4);
$Cylinder = new Cylinder(3, 4, 5);
$Rectangle = new Rectangle(3, 4, 5);
$Rectangular = new Rectangular(3, 4, 5, 6);
echo $Circle->calculateArea() . " " . $Circle->calculatePerimeter() . "<br>";
echo $Cylinder->calculateArea() . " " . $Cylinder->calculateVolume() . "<br>";
echo $Rectangle->calculateArea() . " " . $Rectangle->calculatePerimeter() . "<br>";
echo $Rectangular->calculateArea() . " " . $Rectangular->calculateVolume();