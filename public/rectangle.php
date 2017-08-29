<?php 

class Rectangle
{

private $width;
private $height;


public function __construct($height, $width){
	$this->setHeight($height);
	$this->setWidth($width);

	// $this->width = $width;
	// $this->height = $height;
}

public function area() {
	return $this->width * $this->height;
}

public function perimeter(){
	return (2* ($this->width)) + (2*($this->height));
}

// Getters
public function getHeight(){
	return $this->height;
}

public function getWidth(){
	return $this->width;
}

// Setters
public function setHeight($val){
	return $this->height = $val;
}

public function setWidth($val){
	return $this->width = $val;
}






}