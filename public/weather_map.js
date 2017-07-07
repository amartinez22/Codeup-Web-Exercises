var weather;
function setup(){
	createCanvas(200,200);
	loadJSON('http:http://api.openweathermap.org/data/2.5/forecast/daily');
}

$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
	APPID: "f8a7e861569363127811c7d09d6c19ca",
	q: "San Antonio, TX"
	
	}).done(function(data) {
	console.log(data);
	console.log(data.coord.lat);
	//29.42
	console.log(data.weather[0].description)
	//few clouds




	}).fail(function(jqXhr, status, error){
	alert("There was an error! Check the console for details");
	console.log()
	});
