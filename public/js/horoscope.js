(function() {
    "use strict";

var signString = $("#sign").attr('value');
console.log(signString);

var url ='https://aztro.herokuapp.com?sign=' + signString + '&day=today';



$.ajax({
     type:'POST',
     url: url,
     success:function(data){
     console.log(data);
     addHoriscope(data);
     console.log(data.current_date);
     console.log(data.compatibility);
     console.log(data.description);
	}
});

function addHoriscope(data){
  	var firstBoxString = "";
  	console.log(data);
		firstBoxString += data.current_date + "<br>";
  		firstBoxString += data.description + "<br>";
  		firstBoxString += "Lucky Number: " + data.lucky_number + "<br>";
  		firstBoxString += "Today's Mood: " + data.mood + "<br>";
		$(".firstbox").append(firstBoxString);
};
////////////   Spouse Box   ////////////////////
$.ajax({
     type:'POST',
     url:url,
     success:function(data){
     console.log(data);
     addHoriscopeSecondBox(data);
     console.log(data.current_date);
     console.log(data.compatibility);
     console.log(data.description);
	}
});

function addHoriscopeSecondBox(data){
  	var firstBoxString = "";
  	console.log(data);
		firstBoxString += data.current_date + "<br>";
  		firstBoxString += data.description + "<br>";
  		firstBoxString += "Lucky Number: " + data.lucky_number + "<br>";
  		firstBoxString += "Today's Mood: " + data.mood + "<br>";
		$(".secondbox").append(firstBoxString);
};

$('#sign').click(function() {
  console.log($('#sign').val());
});

})();