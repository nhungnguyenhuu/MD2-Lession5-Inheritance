<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$point = new Point(3, 4);
echo $point->toString()."<br>";
print_r($point->getXY())."<br>" ;

$moveablePoint = new MoveablePoint(1, 2, 5, 6);
print_r($moveablePoint->getSpeed()) ;
echo $moveablePoint->toString()."<br>";
echo $moveablePoint->move();
