
var x = 1;
while (x < 65536) {
	
	x = x * 2;

	console.log(x);
}
------------------------------
Ryan version

var i = 1;
var endPoint = 65536;
while( i < endPoint) {
	i = i * 2;
	console.log(i);
}






/*3.) An ice cream seller can't go home until she sells all of her cones. 
Write a JS program that generates a random number between 50 and 100 
representing the amount of cones to sell. Your code should generate numbers 
between 1 and 5, simulating the amount of cones being bought by her clients. 
Use a do-while loop to log to the console the amount of cones sold to each 
person. This is how you get the random numbers. */

 // This is how you get a random number between 50 and 100
 /*var allCones = Math.floor(Math.random() * 50) + 50; */

 // This is how you get a random number between 1 and 5

 //1st- Get a random number of cones from 1-5
 //Calculate the result of allcones minus conesOrdered
 //storethat result to the variable allCones to reflect your new inventory.

 
var allCones = Math.floor(Math.random() * 50) + 50;
	console.log("You must sell " + allCones + " today");

while (allCones>0) {
	var conesOrdered = Math.floor(Math.random() * 5) + 1;
	console.log("they bought " + conesOrdered + " cones");
 	allCones = allCones - conesOrdered;
 	console.log(allCones);
 }
 console.log("Yay! I sold them all!");
