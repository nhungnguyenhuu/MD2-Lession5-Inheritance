<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Shape.php";

$circle = new Circle("Circle1", 3);
echo "Circle area: ".$circle->calculateArea()."<br>";
echo "Circle perimeter: ".$circle->calculatePerimeter()."<br>";

$cylinder = new Cylinder("Cylinder1", 2, 3);
echo "Cylinder area: ".$cylinder->calculateArea()."<br>";
echo "Cylinder perimeter: ".$cylinder->calculatePerimeter()."<br>";

$rectangle = new Rectangle("Rectangle1", 3,4);
echo "Rectangle area: ".$rectangle->calculateArea()."<br>";
echo "Rectangle perimeter: ".$rectangle->calculatePerimeter()."<br>";
$square = new Square("Square", 3);
echo "Square area: ".$square->calculateArea()."<br>";
echo "Square perimeter: ".$square->calculatePerimeter()."<br>";