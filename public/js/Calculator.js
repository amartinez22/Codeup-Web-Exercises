
var operators = document.getElementsByClassName("operators");
var numbers = document.getElementsByClassName("numbers");
var firstOperator = document.getElementById("firstOperator");
var secondOperator = document.getElementById("secondOperator");
var lastOperator = document.getElementById("lastOperator");
var equals = document.getElementById("equals"); 
var clear = document.getElementById("clear"); 
var i;
var finalTotal;

// Sets up number to go in First Box and multiple numbers at once-//

for ( i = 0; i < numbers.length; i++) {
    numbers[i].addEventListener('click', buttonHandler)
};
// Sets up operator to go into Second Box
for ( i = 0; i < operators.length; i++) {
	operators[i].addEventListener('click', buttonHandler)
};

// Function------------------------------------------------------//
function buttonHandler() {
	if(this.className.includes('operator')) {
		secondOperator.value = this.innerText;
		// secondOperator.value = this.innerText;
	} else if(secondOperator.value != '') {
		var lastValue = lastOperator.value;
		lastValue += this.innerText;
		lastOperator.value = lastValue;
	} else if(this.className.includes('numbers')) {
		var displayValue = firstOperator.value;
 		displayValue += this.innerText;
		firstOperator.value = displayValue;
	}
}

// function buttonHandler() {
// 	if(this.className.includes('operator')) {
// 		secondOperator.setAttribute("value", this.innerText);
// 		// secondOperator.value = this.innerText;
// 	} else if(secondOperator.getAttribute("value") != '') {
// 		var lastValue = lastOperator.getAttribute("value");
// 		lastValue += this.innerText;
// 		lastOperator.setAttribute("value", lastValue);
// 	} else if(this.className.includes('numbers')) {
// 		var displayValue = firstOperator.getAttribute("value");
//  		displayValue += this.innerText;
// 		firstOperator.setAttribute("value", displayValue);
// 	}
// }


// Zeroing Out the Display Button-------------------------------//
clear.addEventListener('click', function() {
	firstOperator.value = "";
	secondOperator.value = "";
	lastOperator.value = "";
});

// Clear out 2 right operators when calculating equals-----------//
function mathClearEquals(){
	// secondOperator.value = "";

	lastOperator.value = "";
}


// Setting up Math Calculation-------------------------------//
equals.addEventListener('click', mathOperation);


// Math Operations-------------------------------------------//

function mathOperation() {
	mathFirstOperator = parseFloat(firstOperator.value);
	mathLastOperator = parseFloat(lastOperator.value);

	if (secondOperator.value == "+"){
		finalTotal = mathFirstOperator + mathLastOperator;
		firstOperator.value = finalTotal;
		mathClearEquals();
	
	} else if (secondOperator.value == "-"){
		finalTotal = mathFirstOperator - mathLastOperator;
		firstOperator.value = finalTotal;
		mathClearEquals();

	} else if (secondOperator.value == "*"){
		finalTotal = mathFirstOperator * mathLastOperator;
		firstOperator.value = finalTotal;
		mathClearEquals();

	} else if (secondOperator.value == "/"){
		finalTotal = mathFirstOperator / mathLastOperator;
		firstOperator.value = finalTotal;
		mathClearEquals();

	} 
}



// this means the thing u jyst clicked on






