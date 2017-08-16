<?php
require_once "rectangle.php";
require_once "square.php";

// $newRectangle = new Rectangle(4,5);
// echo 'The area is ' . $newRectangle->area();

$newSquare = new Square(4, 5);
echo "The perimeter is " . $newSquare->perimeter() . PHP_EOL;

echo "The area is " . $newSquare->area();
