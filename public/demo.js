"use strict"
// single = is assignment operator
var myFavoriteNumber =23;
var myFavoriteNumber = prompt("What is your favorite number?");

alert("Please input your favorite number");

console.log("My favorite number is" + myFavoriteNumber);

//==compares values but not data type
if (myFavoriteNumber == "23") {
	console.log("Your favorite number is correct. It's 23");

//===compares values and data types
if (myFavoriteNumber === "23") {
	console.log("Really? Your favorite number is a string? Wow!")
}
var result = 2 + 2;
console.log("Result of 2 + 2 is " + result);

result = "2" + 2;
console.log("Result of '2' + 2 is " + result);

var answer = prompt ("What is today?");
