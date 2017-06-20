"use strict"
var pizzaPreference = prompt("What kind of pizza do you like?");

if (pizzaPreference === "pineapple and hot sauce") {
    alert("What a coincidence, that's my favorite!");
} else if (pizzaPreference === "cheese") {
    alert("Just plain cheese? Okay...");
} else {
    alert(pizzaPreference + " isn't my favorite, but let's order some!");
}

/*1.) HEB offers a 10% discount for shoppers whose total is more than $200. 
We know that Cameron bought $180, Ryan $250 and George $320. 
Write a JS program, using conditionals, that logs to the browser, 
how much Ryan, Cameron and George need to pay. Your program will have to 
display a line with the name of the person, the amount before the discount,
if any, and the amount after the discount.*/

var ryan = 180;
var cameron = 250;
var george = 320;
var discountedAmount;
var finalTotal;
if (cameron > 200) {
	discountedAmount = cameron * .1;
	finalTotal = cameron - discountedAmount;
	console.log("Cameron got a discount on " + cameron + " of" + discountedAmount);
} else {
	console.log("Cameron paid " + cameron + " and did not have a discount");
	finalTotal = cameron;
}
	console.log("Cameron has a final total of " + finalTotal);


if (ryan > 200) {
	discountedAmount = ryan * .1;
	finalTotal = ryan - discountedAmount;
	console.log("Ryan got a discount on " + ryan + " of" + discountedAmount);
} else {
	console.log("Ryan paid " + ryan + " and did not have a discount");
}
console.log("Ryan has a final total of " + finalTotal);


if (george > 200) {
	discountedAmount = george * .1;
	finalTotal = george - discountedAmount;
	console.log("George got a discount on " + george + " of" + discountedAmount);
} else {
	console.log("George paid " + george + " and did not have a discount");
}
console.log("George has a final total of " + finalTotal);


/*2.) Suppose your friend Isaac cannot decide between two options. He doesn't know if he should 
buy a car or a new house. 
Help him decide! Write a small JS program. The following line generates either a 0 or a 1 randomly.

 var flipACoin = Math.floor(Math.random()* 2)

Add an if statement to log a "Buy a car" to the console if the result is 0 and "Buy a house" if the 
result is 1. 
Could this program be written using a ternary operator?*/

 var flipACoin = Math.floor(Math.random()* 2)
 console.log(flipACoin)
 if (flipACoin === 1) {
 	console.log("Buy a house");
} else {
 	console.log("Buy a car");
 }

/*Ternary*/
 (flipACoin === 1) ? "Buy a house!" : "Buy a car!";
 console.log(outcome);





/*3.)Suppose there's a promotion in Walmart, each customer is given a randomly generated "lucky number" 
between 0 and 6. If your lucky number is 0 you have no discount, if your lucky number is 1 you'll 
get a 10% discount, if it's 2, discount is 25%, if it's 4, 50%, and if it's 5 you'll get all for free!.
 Write a JS program that logs to the console how much you will have to pay if your receipt is for $60. 
 Every time you reload your page you should see a different result. Use a switch statement for this 
 exercise.

The following line generates a random number between 0 and 5.*/

var luckyNumber = Math.floor(Math.random()* 6)
var discount = 0;
var subtotal = 60;
var newTotal;

console.log(luckyNumber)

switch (luckyNumber) {
	case 0:
		console.log("No discount");
		discount = 0;
		break;
	case 1:
		console.log("You get a 10% off discount");
		discount = .1;
		break;
	case 2:
		console.log("You get a 25% off discount");
		discount = .25;
		break;
	case 4:
		console.log("You get a 50% off discount");
		discount = .5;
		break;
	case 5:
		console.log("You get a 100%");
		discount =  1.0;
		break;
	default:
		console.log("No lucky number discount");

newTotal = subtotal - (subtotal * discount);
console.log("Your final total after discount is " + newTotal);


/* Write some JavaScript that uses a confirm dialog to ask the user if they would like to 
enter a number. If they click 'Ok', prompt the user for a number, then use 3 separate alerts to tell the user:
whether the number is even or odd
what the number plus 100 is
if the number is negative or positive

if what the user enters is not a number, use an alert to tell them that, and do not display any of the above 
information. */



var proceed = ("Would you like to enter a number?");

if (proceed) {

	var number = prompt("Enter a number");
	if (isNaN(parseFloat(number)) {
		console.log("Not a valid number.");
	} else {
		if (number % 2 === 0) {
			alert("Your number is even.");
	} 
		else {
		alert("Your number is odd.");
	}
		alert("Your number plus 100 is " + (parseFloat(number) + 100));

		if (number < 0) {
			console.log(number + " is negative");
		} else {
			console.log(number + " is positive");
		}
	}

} else {









