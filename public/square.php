<?php
require_once "rectangle.php";

class Square extends Rectangle
{

	private $height;
	private $width;

	public function __construct($height){
		$width = $height;
		parent::__construct($height, $height);
	}

	public function perimeter(){
		return $this->getHeight() * 4;
		// return (2* ($this->width)) + (2*($this->height));
	}

	// public function area() {
	// 	return $this->width * $this->height;
	// }


}