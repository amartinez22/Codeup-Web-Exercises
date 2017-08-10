<?php
// Make your own PHP library of helpful functions!
// Make a file called library.php

// Write a function called isEven that takes in a variable and returns 
// true or false if the provided input is evenly divisible by two or not.

// function isEven($x){
// 	if ($x % 2 == 0){
// 		return true;
// 	} else {
// 		return false;
// 	}
// }
// var_dump(isEven(5));
// var_dump(isEven(10));

// function isVowel($input){
// 	if(!is_string($input) && count($input) !== 1){
// 		return false;
// 	}

// 	$input = strtolower($input);

// 	if($input ==='a' || $input ==='e' || $input ==='i' || $input ==='o' || $input ==='u'){
// 		return true;
// 	} else {
// 		return false;
// 	}
// }

// Write a function called isVowel that returns true or false if the provided 
// input is the letter 'a', 'e', 'i', 'o', or 'u'

// function isVowel($string){

// $vowels = 'aeiou';

// 	if(strpos($vowels,$string) !== false){
// 		return true;
// 	} else {
// 		return false;
// 	}
// }

// var_dump(isVowel('a'));
// var_dump(isVowel('z'));


// Write a function called "first" that takes in an argument that could be an 
// array or a string. Return the first character if the argument is a string. 
// Return the first element of the array if the input is an array.

// function first($x){
// 	if(is_array($x)){
// 		$arrayAnswer = array_shift($x);
// 		return $arrayAnswer;
// 	}
// 	if(is_string($x)){
// 		return $x[0];
// 	}
// }

// Easier Way
// function first($x){
// 	if(is_array($x)){
// 		return $x[0];
// 	}
// 	if(is_string($x)){
// 		return $x[0];
// 	}
// }


// var_dump(first('first'));
// var_dump(first([1,2,3]));

// Write a function called "second" that takes in input that could be an array 
// or a string. The function should return the second character or element of the input.

// function second($x){
// 	if(is_array($x)){
// 		return $x[1];
// 	}
// 	if(is_string($x)){
// 		return $x[1];
// 	}
// }


// var_dump(second('first'));
// var_dump(second([1,2,3]));

// Write a function called "last" that takes in an input that could be an array 
// or a string. Your function should return the last character or element of the input.
// function last($x){
// 	if(is_array($x)){
// 		$arrayIndex = array_pop($x);
// 		return $arrayIndex;
// 	}
// 	if(is_string($x)){
// 		return $x[-1];
// 	}
// }


// var_dump(last('first'));
// var_dump(last([1,2,3]));

// Write a function called "reverse" that takes in an input of either a string 
// or an array. Your function should return the elements or characters in reverse order.

// function reverse($x){
// 	if(is_array($x)){
// 		$arrayIndex = array_reverse($x);
// 		return $arrayIndex;
// 	}
// 	if(is_string($x)){
// 		return strrev($x);
// 	}
// }


// var_dump(reverse('coderbyte'));
// var_dump(reverse([1,2,3]));

// Write a function called "random" that takes in an input that can be either a 
// string or an array. Your function should return a random element or character from 
// the input.

// function random($x){

// 	if(is_string($x)){

// 		$array = str_split($x);

// 	}else if(is_array($x)){

// 		$array = $x;

// 	} else {

// 		return false;
		
// 	}

// 	return $array[array_rand($array)];
	
// }

// var_dump(random('first'));
// var_dump(random([1,2,3,4,5,12,45,36,78]));
// var_dump(random(['kristie', 'john', 'gonzalo','vivian','russell']));
// var_dump(random(907654654));

// Using the PHP language, have the function FirstFactorial(num) take the num 
// parameter being passed and return the factorial of it (e.g. if num = 4, return 
// 	(4 * 3 * 2 * 1)). For the test cases, the range will be between 1 and 18 and 
// the input will always be an integer.
// Input:4
// Output:24

// Input:8
// Output:40320 

// function factorial($number) { 

//     if ($number < 2) { 
//         return 1; 
//     } else { 
//         return ($number * factorial($number-1)); 
//     } 
// }
// var_dump(factorial(4));

// Using the PHP language, have the function LongestWord(sen) take the sen parameter
// being passed and return the largest word in the string. If there are two or more 
// words that are the same length, return the first word from the string with that 
// length. Ignore punctuation and assume sen will not be empty. 

// function longestWord($sen) {  
// 	$string = explode(' ', $sen);
// 	$longest = 0;
// 	foreach($string as $index => $value){
// 		// return $string;
//   		$length = strlen($value);
// 		// return $value;
// 		if($length > strlen($longest)){
// 			$longest = $value;
// 		}
// 	}
//   	return $longest;
         
// }
// var_dump(longestWord("The other day woooahhh she told me hoooahhh"));

// Using the PHP language, have the function LetterChanges(str) take the str 
// parameter being passed and modify it using the following algorithm. Replace every 
// letter in the string with the letter following it in the alphabet (ie. c becomes d, 
// 	z becomes a). Then capitalize every vowel in this new string (a, e, i, o, u) and 
// finally return this modified string. 

// Sample Test Cases
// Input:"hello*3"
// Output:"Ifmmp*3"

// Input:"fun times!"
// Output:"gvO Ujnft!"

// function letterChanges($str){
// 	str_replace()
// 	$vowels = 'aeiou';
// 	$alphabet = 'abcdefghijklmnopqrstuvwxyz';

// 	if(strpos($vowels,$str) !== false){
// 		return strtoupper($str);
// 	} 


// 	return
// }

// var_dump(letterChanges("hello*3"));
// var_dump(letterChanges("fun times!"));

// Write a function findNeedle() that takes an array full of junk but 
// containing one “needle”

// After your function finds the needle it should return a message (as a string) that 
// says: “found the needle at position ” plus the index it found the needle

// $array = [‘3’, ‘123124234’, null, ‘needle’, ‘world’, ‘hay’];

// function findNeedle($haystack)
// {
// 	$result = array_search('needle', $haystack);
// 	return $result;

// }

// findNeedle($array);

// inputGet($key): returns the value specified by the key, or null if the key is not set.
// Function to retrn the value of a key if set in the $_REQUEST super global
function inputGet($key, $default = ""){
	if(inputHas($key)){
		return $_REQUEST[$key];
	} else {
		return $default;
	}
}

// inputHas($key): returns true or false based on whether the key is available.
// Function to check if a given key is set in the $_REQUEST super global
function inputHas($key)
{
	return isset($_REQUEST[$key]);
}




// escape($input): returns the input as a safely escaped string.
// filtering input
function escape($input){
	if(!is_string($input)){
		return false;
	}
return htmlspecialchars(string_tags($input));
}





?>