<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2D = new Point2D(3, 5);

echo $point2D->toString()."<br>";
echo "<br>";

$point3D = new Point3D(2, 4, 6);
echo $point3D ->toString()."<br>";
echo $point3D->getXYZ(6);