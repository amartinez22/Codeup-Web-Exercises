"use strict";

*
 * TODO:
 * Create a function called 'sayHello' that takes a parameter 'name'.
 * When called, the function should return a message that says hello to the 
 passed in name.
 *
 * Example
 *  > sayHello("codeup") // returns "Hello, codeup!"
 

function sayHello(name) {
	return "Hello, " + name + "!";
	}
console.log(sayHello("codeup"));



*
 * TODO:
 * Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.
 * Store the result of the function call in a variable named 'helloMessage'.
 * console.log 'helloMessage' to check your work 
 
var myNameIs = "Analyssa";
var helloMessage = sayHello(myNameIs); 
console.log(helloMessage);





Do not modify the following line, it generates a random number between 1 and
100 and stores it in a variable named random


*
 * TODO:
 * Create a function called 'isOdd' that takes a number as a parameter.
 * The function should use the ternary operator to return a message.
 * The message should contain the number being checked, and whether or not the
 * number is odd
 *
 * Example
 *  > isOdd(42) // returns "42 is not odd!"
 *
 * Call the function 'isOdd' passing the variable 'random' as a parameter.
 * console.log *outside of the function* to check your work 
 
var random = Math.floor((Math.random() * 100) + 1);
function isOdd(number) {
	if (random % 2 === 0) {
		return (random + " Your number is even!");
	} else {
		return (random + " Your number is odd!")
	}
}
console.log(isOdd(42));


*
 * TODO: Create a function named 'calculateTip' to calculate a tip on a bill at a
 * restaurant
 *
 * the function should accept a tip percentage and the total of the bill, and
 * return the amount to tip
 *
 * Example
 *  > calculateTip(0.20, 20) // returns 4
 

var tipPercent;
var billTotal;
function calculateTip(tipPercent, billTotal) {
return tipPercent * billTotal;
}
	console.log(calculateTip(0.20, 30));



*
 * TODO: use prompt and alert in combination with your calculateTip function to
 * prompt the user for the bill total and a percentage they would like to tip,
 * then display the dollar amount they should tip
 



var tipPercent;
var billTotal;
function calculateTip(tipPercent, billTotal) {
return tipPercent * billTotal;
}
var userBill = prompt("What is your Total?");
var userPercentage = prompt("How much would you like to tip?")
alert("Your tip amount is " + calculateTip(userPercentage, userBill));
	// console.log(calculateTip(0.20, 30));


1.) Write a function called `identity(input)` that takes in an argument called 
input and returns that input.

function identity(input) {
	return input;
}
console.log(identity(8));


2.)Write a function called `getRandomNumber(min, max)` that returns a random 
number between min and max values sent to that funciton call.

function getRandomNumber(min, max) {
	return Math.floor((Math.random() * max-min) + min);
}
console.log(getRandomNumber(1, 10));


3.) Write a function called `first(input)` that returns the first character in 
the provided string. 

function first(input) {
	 return input.substring(0, 1);
}
console.log(first("class"))

4.)Write a fuction called `last(input)` that returns the last character of a 
string

function last(input) {
	 return input.slice(-3);
}
console.log(last("class"))

5.)Write a function called `rest(input)` that returns everything but the first 
// character of a string.

function rest(input) {
	return input.slice(1);
}
console.log(rest("class"));


6.)Write a function called `reverse(input)` that takes a string and returns it
// reversed.

function reverse(input) {
	return (input);
}
console.log(reverse("her"));

7.)Write a function called `isNumeric(input)` that takes an input and returns 
// a boolean if the input is numeric.

7.)Write a function called `count(input)` that takes in a string and returns 
// the number of characters.

8.)Write a function called `add(a, b)` that returns the sum of a and b

9.)Write a function called `subtract(a, b)` that return the difference between 
// the two inputs.

Write multiply(a, b) that returns the product

// Write a divide(numerator, denominator) function that returns a divided by b

// Write a remainder(number, divisor) function that returns the remainder left 
over when dividing `number` by the `divisor`

// Write the function `square(a)` that takes in a number and returns the number 
multiplied by itself.





