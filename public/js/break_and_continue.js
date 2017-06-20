/* Prompt the user for an odd number between 1 and 50. Use a loop 
and a break statement to continue prompting the user if they enter
invalid input. */



var userInput;
userInput = prompt("Please input an off number between 1 and 50");
} while (isNaN(userInput) || userInput > 50 || userInput < 1);


for (var i = 1; i>=50; i+=2) {
	if (i === userInput)
		console.log("Yikes! Skipping number: " + i);








 = prompt("Choose a number between 1 and 50!");
	console.log(number);
	break;

for (var i = 1; i>=50; i++) {
	prompt("This number is invalid");
}