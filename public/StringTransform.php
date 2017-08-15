<?php
class StringTransform
{
	public static $stringTest = 'test';

	public static function isLetter($string)
	{
		if (ctype_alpha($string)){
			return true;
		} else {
			return false;
		}
	}

	public static function secondCharCap($string)
	{
	$string[1] = strtoUpper($string[1]);
	}



}

?>