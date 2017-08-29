<?php
require_once "rectangle.php";
require_once "square.php";

$newRectangle = new Rectangle(4,5);
echo 'The area is ' . $newRectangle->area() . PHP_EOL;

echo 'The perimeter is ' . $newRectangle->perimeter() . PHP_EOL;

$newSquare = new Square(10);

echo "The perimeter is " . $newSquare->perimeter() . PHP_EOL;

echo "The area is " . $newSquare->area() . PHP_EOL;

echo "GET HEIGHT " . $newSquare->getHeight(). PHP_EOL;

// echo "SET HEIGHT " . $newSquare->setHeight(4);
