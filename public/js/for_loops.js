/*Write the JS code to prompt the user for a number between 1 and 10,
then log to the console the multiplication table for that number. 
For instance, if the user enters is 7, the console output should 
look like: 
var number = prompt("Enter a number between 1 and 10"); 

for (var i = 1; i <=10; i++){
	console.log(number + "x" + i + "=" + number * i );
}


/*Use a for loop and the code from the previous lessons to generate 10 
random numbers between 20 and 200 and output to the console whether 
each number is odd or even. For example: 


for (var x = 1; x <= 20; x++) {
	var numbers = Math.floor(Math.random() * 180) + 20;
	
	if (numbers % 2 === 0) {
		console.log(numbers + " Your number is even!");
	} else {
		console.log(numbers + " Your number is odd!");
	}
}


/*Use inline JavaScript to create a for loop that uses console.log 
to create the output shown below. 



for (var i =1; i<=10; i++) {
	var numberString = i.toString();
	if (numberString === "10") {
		numberString = "0"
	}
	var repeatNumber = numberString.repeat(i);
	
	console.log(repeatNumber)
} 


/*Create a for loop that uses console.log to create the output 
shown below. */

for (var i = 100; i>=5; i-=5) {
	console.log(i);
}









