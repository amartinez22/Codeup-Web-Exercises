(function() {
    "use strict";
function(addAJAXDeathStarToPage(){
//make an AJAX Get request to /data/inventory.json
var url = "/data/inventory.json";

//make an AJAX request
var request= $.get(url);

//setup done and fail methods
request.done(function(data, status, request) {
	console.log(data);
	console.log(status);
});
request.fail(function(request, status, error) {
	console.log(status);
	console.log(error);
});

var htmlString = "<tr>";
htmlString+= "<td>" + data.name + "</td>";
htmlString+= "<td>" + data.cost + "</td>";
htmlString+= "<td>" + data.starship + "</td>"
htmlString += "</tr>";
$("#insertProducts").append(htmlString);

});

var url = "/data/inventory.json";

var request = $.get(url);

request.done(function(data, status, request){

var htmlString = "";

data.forEach(function(tool){
	htmlString += "<tr>";
	htmlString += "<td>" + tool.title + "</td>");
	htmlString += "<td>" + "$" + tool.price + "</td>");
	htmlString += "<td>" + tool.quantity + "</td>");
	htmlString += "<td>" + tool.categories + "</td>");
	htmlString += "</tr>";
});


request.fail(function(request, status, error) {
	console.log(status);
	console.log(error);
});


	// tool = data[0];
	// htmlString += "<td>" + tool.title + "</td>");
	// htmlString += "<td>" + tool.price + "</td>");
	// htmlString += "<td>" + tool.quantity + "</td>");
	// htmlString += "<td>" + tool.categories + "</td>");








 })();