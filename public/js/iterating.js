// (function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, 
    // in a variable called 'names'.
    // var names = ['Analyssa', 'Memo', 'Kristie'];


    // TODO: Create a log statement that will log the number of elements in the names array.
    // console.log(names.length);


    // TODO: Create log statements that will print each of the names array elements 
    // individually.
    // })();
	// console.log(names[0]);
	// console.log(names[1]);
	// console.log(names[2]);

// For Loop
	// var pies = ['apple', 'cherry', 'key lime'];
	// for (var i = 0; i <pies.length; ++i) {
	// 	console.log(pies[i]);
	// }

// Every Other Loop
	// 	var pies = ['apple', 'cherry', 'key lime'];
	// for (var i = 0; i <pies.length; i += 2) {
	// 	console.log(pies[i]);
	// }

/// For Each Loop
	// pies.forEach(function(element, index, array) {
	// 	console.log(element);
	// }
	
	// function losPies(element) {
	// 	console.log(element)
	// }
 	var names = ['Analyssa', 'Memo', 'Kristie'];
	for (var i = 0; i <names.length; ++i) {
		console.log(names[i]);
	}
	
	names.forEach(function (element, index, array) {
		console.log(element);
	});

	// *For loop when you don't want to go over entire array, 
	// skip over a number of elements,
	// *For each loop syntax is clean
	// iterate over every element in an array

	var firstElement = names.shift();
	names.shift();

	names.unshift(firstElement);
	// *Adds to the beginning

	names.pop();
	// removes last element from array


	names.indexOf('Analyssa');

	// locate specific index of

	var bonds = ["Craig", "Brosman", "Dalton", "Moore", "Connery"];
	// removing elements splice
	bonds.splice(3,2);
	console.log(bonds);

	bonds.splice(bonds.indexOf("Moore"), 2);

	//note that conncery contains an arrat of a single element, Not a single value

	//adding elements with splice
	bonds.splice(1, 0, "Lazenby");

	bonds.splice(0, 1, "Lazenby")

	//sort array
	console.log(bonds, sort());



 	console.log(bonds, reverse());
















