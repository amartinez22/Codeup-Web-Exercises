(function(){
    "use strict";

    /**
     * TODO:
     * Create person object, store it in a variable named person
     */
    var persons ={};
    persons.firstName = "Analyssa";
    persons.lastName = "Martinez";
    persons.sayHello = function() {
       alert("Hello " + persons.firstName + " " + persons.lastName);
        }
    persons.sayHello();


    var person = {
        "firstName": "Cody",
        "lastName": "Hastings",
        "sayHello":function() {
        console.log("Hello" + this.firstName + " " + this.lastName);
        },
    }
    person.sayHello(); 

    /**
     * TODO:
     * Create firstName and lastName properties in your person object, and
     * assign your name to them
     */

    /**
     * TODO:
     * Add a sayHello method to the person object that returns a greeting using
     * the firstName and lastName properties.
     * console.log the returned message to check your work
     *
     * Example
     * person.sayHello() // returns "Hello from Rick Sanchez!"
     */

    /** TODO: Remember this problem from before?
     *
     * HEB has an offer for the shoppers that buy products amounting to more
     * than $200. Write a JS program, using conditionals, that logs to the
     * browser, how much does Ryan, Cameron and George need to pay. We know that
     * Cameron bought $180, Ryan $250 and George $320. Your program will have to
     * display a line with the name of the person, the amount before the
     * discount, the discount, if any, and the amount after the discount.
     *
     HEB offers a 10% discount for shoppers whose total is more than $200. We know 
     that Cameron bought $180, Ryan $250 and George $320. Write a JS program, using 
     conditionals, that logs to the browser, how much Ryan, Cameron and George need to pay. 
     Your program will have to display a line with the name of the person, the amount before 
     the discount, if any, and the amount after the discount.
     * Uncomment the lines below to create an array of objects where each object
     * represents one shopper. Use a foreach loop to iterate through the array,
     * and console.log the relevant messages for each person
     */
  
    var shoppers = [
         {name: 'Cameron', amount: 180},
         {name: 'Ryan', amount: 250},
         {name: 'George', amount: 320}
     ];
     shoppers.forEach(function(person) {
        if (person.amount > 200) {
            console.log(person.name + "s total before the discount is"+ " $ " + person.amount + "." + person.name + " receives a discount of 10%!" + person.name + " total after discount is" + .9 * person.amount);
        } else {
            console.log(person.name + " " + "doesn't get a discount");
        }

    });

// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author property.
// The author property should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
// var books = [todo];

    var books = [
        {
            Title: "Oh the Places Youll Go",
            Author: {
                    firstName:"Dr.",
                    lastName:"Seuss",
            }
        },

        {
             Title: "The Very Hungry Caterpillar",
             Author: {
                    firstName:"Eric",
                    lastName:"Carle",
            }
        },

        {
            Title: "Goodnight Moom",
             Author: {
                    firstName:"Margaret",
                    lastName:"Brown",
            }
        },

        {   
            Title: "The Tale of Peter Rabbit",
             Author: {
                    firstName:"Beatrix",
                    lastName:"Potter",
            }
        },

        {
            Title: "Where the wild things are",
             Author: {
                    firstName:"Maurice",
                    lastName:"Sendak",
            }
        },

        ]




// {name: 'Oh the Places Youll Go', authorFirstName: 'Dr.', authorLastName:'Seuss'},
// {name: 'The Very Hungry Caterpillar', authorFirstName: 'Eric', authorLastName:'Carle'},
// {name: 'Goodnight Moon', authorFirstName: 'Margaret', authorLastName:'Brown'},
// {name: 'The Tale of Peter Rabbit', authorFirstName: 'Beatrix', authorLastName:'Potter'},
// {name: 'Where the wild things are', authorFirstName: 'Maurice', authorLastName:'Sendak'},
// ]
// log out the books array
books.forEach(function(books){
console.log(books);
});
 
todo:
Loop through the array of books using .forEach and print out the specified information about each one.
start loop here
    console.log("Book #" + todo);
    console.log("Title: " + todo);
    console.log("Author: " + todo);
    console.log("---");
end loop here
books.forEach(function(book, index){
console.log("The Book # is " + (index + 1);
console.log("The Book Title is " + book.Title);
console.log("The Author is " + book.Author.firstName + " " + book.Author.lastName);
console.log("-------");
});

// var books = [
// {name: 'Oh the Places Youll Go', authorFirstName: 'Dr.', authorLastName:'Seuss'},
// {name: 'The Very Hungry Caterpillar', authorFirstName: 'Eric', authorLastName:'Carle'},
// {name: 'Goodnight Moon', authorFirstName: 'Margaret', authorLastName:'Brown'},
// {name: 'The Tale of Peter Rabbit', authorFirstName: 'Beatrix', authorLastName:'Potter'},
// {name: 'Where the wild things are', authorFirstName: 'Maurice', authorLastName:'Sendak'},
// ]

// BONUS 1 (expanding on the books object exercise):

   var keywords = [science, romance, kids, thriller, comedy];
   var available = true;
   var dateAvailable =
    {month: ""}
    {day:""}
    }
   if (dateAvailable <= today
        console.log("It's available!!")
    if (dateAvailable >= today)
        console.log("It's not available!")




    // var shoppers = [
    //      {name: 'Cameron', amount: 180},
    //      {name: 'Ryan', amount: 250},
    //      {name: 'George', amount: 320}


    Add a property “keywords” that contains an array of possibly genres the book may be categoriezed by
    Add a boolean property “available” and set it to true
    Add a dateAvailable property that has a string of the date/time when the book will be available
    Add a method rent() that...
        - changes the available property to false if it is not already false
        - sets the dateAvailable to a date exactly two weeks from when the rent() method is called
        (to do this, research the JS Date object and use methods from it in your code)
    Add a method returned() that...
        - changes the available property to true
        - changes the dateAvailble property to the string “now”


BONUS 2 (Create a Dog object):

    The dog object should have properties for:
        breed (string),
        weightInPounds (number),
        age (number),
        color (string),
        steralized (boolean),
        shotRecords (array of objects with properties for date and typeOfShot)

    The dog object should have methods to:
        bark() - will console.log “Woof!”
        getOlder() - will increase age by 1
        fix() - will set sterile to true
        getShot() - takes in an argument for the name of the shot and adds a new shot with the current date to the shotRecords array

console.log("Orsinger's Postulate of Approaching Loops");
console.log("Start by ignoring the loop completely");
console.log("If you have an array of things named with a plural variable name,");
console.log("Then, make a singular version of that variable name and assign the first element of that array.");
console.log("Console.log that first element of the array.")




var index =0;
var book = books[index];

console.log(book);

console.log("Book #" + (index+1));
console.log("Title: " + book.title);
console.log("Author: " + book.author.firstName + " " book.author.lastName);
console.log("-------");

console.log("after console.logging a working solution for the first element of the array");
console.log("Reassign your singular variable to hold the next element of that array");

index = 1;
book = books[index];

console.log("Book #" + (index+1));
console.log("Title: " + book.title);
console.log("Author: " + book.author.firstName + " " book.author.lastName);
console.log("-------");













})();
