<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle(2, "red");
echo "Dien tich hinh tron la: ".$circle->calculateArea()."<br>";
echo "Chu vi hinh tron la: ".$circle->calculatePerimeter()."<br>"."<br>";

$cylinder = new Cylinder(3, "yellow", 2);
echo "Dien tich hinh tru la: ".$cylinder->calculateArea()."<br>";
echo "Chu vi hinh tru la: ".$cylinder->calculateVolume()."<br>";