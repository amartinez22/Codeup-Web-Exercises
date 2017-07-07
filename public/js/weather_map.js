(function() {
    "use strict";


var lat=29.4241;
var lon=-98.4936;

function makeRequest() {
	$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
		APPID: "f8a7e861569363127811c7d09d6c19ca",
		lat: lat,
		lon: lon,
		units: "imperial",
		cnt: "3"
		
		}).done(function(data) {
		console.log(data);
		addWeather(data);
		// console.log(forecast.time.day);
		// console.log(data.coord.lat);
		// 29.42
		// console.log(data.weather[0].description)
		//few clouds

		}).fail(function(jqXhr, status, error){
		alert("There was an error! Check the console for details");
		console.log()
	});		
};
	
	makeRequest();


///////////////////////////////////////////////////////////////////////////

  function addWeather(weather){
  	var firstBoxString = "";
  	console.log(weather);

  	firstBoxString += "<h3>"+ weather.city.name + "</h3>" + "<br>";
  	firstBoxString += "<div class='row'>";

  		weather.list.forEach(function(weather){
  			firstBoxString += "<div class='col-sm-4 day'>";
  			var date = new Date(weather.dt * 1000)
			firstBoxString += date.toDateString() + "<br>";
 			firstBoxString += Math.round(weather.temp.min) + "&deg" + "/" + Math.round(weather.temp.max) + "&deg" + "<br>";
 			firstBoxString += "<img src='http://openweathermap.org/img/w/" + weather.weather[0].icon + ".png'>" + "<br>";
 			firstBoxString += "Rain: " + weather.weather[0].description + "<br>";
 			firstBoxString += "Humidity: " + weather.humidity + "<br>"; 
  			firstBoxString += "Wind: " + weather.speed + "<br>";
  			firstBoxString += "Pressure: " + weather.pressure;
  			firstBoxString += "</div>"; /*closes column div */
  		});
  	
  	firstBoxString += "</div>"; /* closes row div */


  		$('#box1').append(firstBoxString);

  };
/////////////////////// SEARCH BUTTON GOOGLE MAPS////////////////////////////////////////////

// $('button').click(function(mapIt){
// 	var latInput = document.getElementById('latuserInput').value;
// 	var longInput = document.getElementById('longuserInput').value;
// 	latInput = parseFloat(latInput);
// 	longInput = parseFloat(longInput);

// console.log(latInput);
// console.log(longInput);

////////////////////// DROP A PIN /////////////////////////
// var marker;

// function mapIt() {
        var mapOptions = {
            // Set the zoom level
            zoom: 12,

            // This sets the center of the map at our location
            center: {
                lat: 29.4241,
                lng: -98.4936
            }
        };

        // Render the map
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);


// //----------------------------San Antonio Marker-----------------------------------

	// Create lat and long for our marker position
	var findWeather = { lat: 29.4241, lng: -98.4936 };

	// Add the marker to our existing map
	var sanAntoniomarker = new google.maps.Marker({
	    map: map,
	    position: findWeather,
	    draggable: true,
	    animation: google.maps.Animation.DROP,
	    title: 'Click to zoom',
	});

	google.maps.event.addListener(sanAntoniomarker,'dragend', function(){
	 	lat=this.getPosition().lat();
	 	lon=this.getPosition().lng();
	 	$('#box1').html("");
	 	makeRequest();
	});




})();

