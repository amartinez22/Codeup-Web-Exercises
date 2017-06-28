$('document').ready(function() {

var mainbutton = $("#mainbutton").html();
	alert(mainbutton);

$("#mainbutton").css('border', '1px solid red');

$('li').css("font-size", "30px" );

$('#main-header').click(function() {
	$(this).css("background-color", "yellow");
});

$('p').dblclick(function() {
	$(this).css("font-size", "18px");
});

$('li').hover(
	function() {
	$(this).css('color', 'pink');
	},
	function() {
		$(this).css('color', 'white');
		}
	);
});


// });
// $('h1').css("background-color", 'yellow');
// $('p').css("background-color", 'yellow');
// $('li').css("background-color", 'yellow');

// $('h1, p, li').css("background-color", "yellow");

//--------Javascript addEventListener---------------------------
// 1.)
// var mainContainer= document.getElementbyId('container');
// mainContainer.addEventListener('click', function() {
// 	console.log("Howdy");
// })

// 2.)

// function cowboyWelcome() {
// 	console.log("Howdy");
// }
// mainContainer.addEventListener("click", CowboyWelcome);

// //--------Jquery addEventListener---------------------------

// $('container').click(function() {
// 	alert("Howdy");
// });


// //-------Double click and using "this"--------------------
// $ ('li').dblclick(cowboyGreeting);

// function cowboyWelcome() {
// 	console.log(this);
// 	)


// function cowboyGreeting() {
// $(this).css("background-color", "yellow");
// }




//-----------------Hover-----------------------------
//---Single Function
// $('#box').hover(
// 	function() {
// 	$(this).css('border-radius', '75px');
// 	}, 
// 	function() {
// 		$(this).css('border-radius', "0");
// 		}
// 	);
// });

//----------Keyboard Events------------------------
$(document).keydown(function() {
	console.log("Key down");
});

keypress
recogrnized the characetr that is typed
differentiatres btw cpaitalized and non cap
only recognizes keys that can have types output

keup
all keyboard keys when they are released

on
recognizes vanilla JS events, NOT jQuery event names

$('p').on('mouseenter', function() {
	console.log("Clicked");
});


off
mst explicityly target element to remove the event addEventListener
can also speify the spefici event type to remove

$ (document).off('click');

//-----prevent default-------
$(document).keydown(function(e) {
	console.log(e);
});
























