var time = 2000;

//Animating a single style change
$('#animate').click(function){
	$('div').animate({
		width: "30px"
	}, 5000);
	}}
});

//Animating multiple changes
$('#animate').click(function){
	$('div').animate({
		width: "30px",
		height: "30px"
	}, 2000);
});

//Relative value changes
function getBigger(){
	$('div').animate({
		width: "+=30px",
		height: "+=30px"
	}, 500);
	}
$('#bigger').click(getBigger);

//Completion Callback
$('h3').click(function(){
	$('h3').animate({
		"font-size": "200px",
		"opacity": 0
	}, 1500, function() {
		window.location = "https://google.com"
	});
});





//Chaining animations
$('#animate').click(function(){
	$('div').animate({
		left: "400 px",
		width: "400 px"
	}, 2000)
}







