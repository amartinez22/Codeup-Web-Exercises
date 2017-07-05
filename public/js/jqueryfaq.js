$(document).ready(function(){
"use strict";

	// $('.invisible').css('display', 'none');

	// $('dt').click(function(){
	// 	$('.invisible').toggle();

		$('.button0').click(function(){
			$('dd').toggleClass('invisible');
		});
		
		//bonus
		$('dt').click(function(){
			$(this).css('background-color', 'yellow');
		});

		button clicked makes last li in each ul have a yellow background	
		
		$('.button1').click(function(){
			$('ul').each(function(index, element){
			$(element).children().last().css('background-color', 'yellow');
			});
		});

		//when any h3 ic clicked, the li's underneath it should be bolded. 
		// $('h3').click(function(){
		// 	$('ul').each(function(index, element){
		// 	$(element).children().css('font-weight', 'bold');
		// 	});
		// });

// ------------------------------------------------------------------------
		$('h3').click(function() {
			$(this).next().children().css('font-weight', 'bold');
		})



		//when any list item is clicked, first li of the parent ul 
		//should have a font color of blue

		// $('li').click(function(){
		// 	$('ul').each(function(index, element){
		// 	$(element).children().first().css('color', 'blue');
		// 	});
		// });

		$('li').click(function(){
			$(this).parent().children().first().css('color', 'blue');
		});






		//When the X is clicked, hide the entire div element
		$('span').click(function(){
			$('div').hide();
		});

		$('span').click(function(){
			$(this).parent().hide();
		});

		//The ul's next to each h3 that contain facts about each 
		//park should start out hidden and when the corresponding
		//h3 is clicked, the display of ul should be toggling with a sliding effect. 

		$('h3').click(function(){
			$(this).next().slideToggle();
		});

		// $('h3').click(function(){
		// 	$(this).parent().children().hide(3000);
		// });
		
		// After the user has been on the page for 8 seconds, an h2 should fade in 
		// that asks the user to register for the site.
		$('#register').delay(8000).fadeIn();
		});

		//
		// Fade in register alert
		$('#alert').hide().delay(2000).fadeIn();

		//Pop up modal
		setTimeout(function(){
			$('myModal').modal("show");
			}, 2000);
});





