1.)
Write a function named isNegative that accepts a number and returns true or false based on 
whether the input is negative.

 isNegative(-1) // true
 isNegative(6) // false


function isNegative(number) {

	if (number < 0) {
		console.log("true");
	} else {
		console.log("false");
	}
}
--------------------------------------------------
function isNegative(input) {
	if(input < 0) {
		return true;
	} else {
		return false;
	}
}

function isNegative(input) {
	return input < 0; 
}

2.) 
}
Write a function named average that accepts an array of numbers and returns the 
average of those numbers

 average([1, 2, 3]) // 2
 average([4, 6, 8, 10, 12]) // 8


function average(array) {
	var total= 0;
	for (i=0; i < array.length; i++) {
		total+=array[i];
	}
	return total / array.length;
}
console.log(average([1, 2, 3]));




-------------------------------
var total = myArray.length;
function average(arr, total) {
	return myArray / total;
	}
console.log(average ("1,2,3,4,5", 5));



3.)
Write a function named countOdds that accepts an array of numbers and returns the number 
of odd numbers in the array.

 countOdds([1, 2, 3]) // 2
 countOdds([4, 6, 8, 10]) // 0
 countOdds([1, 2, 1, 1]) // 3

var oddNumbers = []
function countOdds(arr) {
	arr.forEach(function (number,index) {
		if (number % 2 != 0){
			oddNumbers.push(number);
		} 
	})
console.log(oddNumbers.length);
};

console.log(countOdds([1,2,3]));

---------------------------------------
function countOdds(array) {
	var oddNumbers = 0;
 	for (var i = 0; i < array.length; i++) {
 		if (array[i] % 2 !=0) {
 		oddNumbers ++; 
	}
}
return oddNumbers; 
}
console.log(countOdds([1, 2, 3]));

 4.)
Write a function named convertNameToObject that accepts a string that contains a 
first name and last name separated by a space, and returns an object with properties firstName and lastName.

 convertNameToObject('Harry Potter') // {firstName: 'Harry', lastName: 'Potter'}
 convertNameToObject('Ron Weasley') // {firstName: 'Ron', lastName: 'Weasley'}






function convertNameToObject(name) {
	var name = name.split(" ");
	console.log(name);

	var nameObject = {
		firstName: name[0],
		lastName: name[1]
	}
	return nameObject;
}

console.log(convertNameToObject('Harry Potter'));


5.)
Write a function named fiveTo that accepts a number and returns an array of the integers 
from 5 up to (but not including) the passed number.

 fiveTo(10) // [5, 6, 7, 8, 9]
 fiveTo(6) // [5]


function fiveTo(number) {
	var array = [];
	for (var i=5; i < number; i++) {
		array.push(i);
	}
	return array;
}
console.log(fiveTo(10));





6.)
Write a function named upperCaseLastNames that accepts an array of objects where each object has properties firstName and lastName and returns the same array of objects with each last name capitalized

 var names = [
     {firstName: 'Harry', lastName: 'Potter'},
     {firstName: 'Ron', lastName: 'weasley'},
     {firstName: 'Hermione', lastName: 'granger'}
 ];
 upperCaseLastNames(names);
 /*
 [
    {firstName: 'Harry', lastName: 'Potter'},
    {firstName: 'Ron', lastName: 'Weasley'},
    {firstName: 'Hermione', lastName: 'Granger'}
 ]
  */

var names = [
     {firstName: 'Harry', lastName: 'Potter'},
     {firstName: 'Ron', lastName: 'weasley'},
     {firstName: 'Hermione', lastName: 'granger'}
 ];
function upperCaseLastNames(names) {
	names.forEach(function(name) {
		name.lastName = name.lastName.toUpperCase();
	});
	return names;
}
console.log(upperCaseLastNames(names));

--------------------------------------------------------------------

var names = [
     {firstName: 'Harry', lastName: 'Potter'},
     {firstName: 'Ron', lastName: 'weasley'},
     {firstName: 'Hermione', lastName: 'granger'}
 ];
function upperCaseLastNames(names) {
	names.forEach(function(name) {
		name.lastName = name.lastName.charAt(0).toUpperCase() + name.lastName.slice(1);
	});
	return names;
}
console.log(upperCaseLastNames(names));

















