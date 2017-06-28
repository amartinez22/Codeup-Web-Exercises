(function() {
        "use strict";

        // Set our map options
        var mapOptions = {
            // Set the zoom level
            zoom: 12,

            // This sets the center of the map at our location
            center: {
                lat:  39.426791,
                lng: -98.489602
            }
        };

        // Render the map
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);


//------------------------------------GEOCODING------------------------------------

    var geocoder = new google.maps.Geocoder();

	// Set our address to geocode
	var address = ("1 Sun Valley Dr. Spring Branch, TX 78070");

	// Geocode our address
	geocoder.geocode({ "address": address }, function(results, status) {

	   // Check for a successful result
	   if (status == google.maps.GeocoderStatus.OK) {

	       // Recenter the map over the address
	       map.setCenter(results[0].geometry.location);
	       console.log(results[0].geometry.location);

	   } else {

	       // Show an error message with the status if our request fails
	       alert("Geocoding was not successful - STATUS: " + status);
	   }
	});
 

//----------------------------------Marker----------------------------------------


// Create lat and long for our marker position
var antlers = { lat: 29.8038, lng: -98.3851 };

// Add the marker to our existing map
var antlermarker = new google.maps.Marker({
    position: antlers,
    map: map,
    title: 'Click to zoom',
    icon: 'img/bread.png'
});

//----------------------------------Home Marker----------------------------------------

var home = { lat: 29.5481, lng: -98.5184 };

// Add the marker to our existing map
var homeMarker = new google.maps.Marker({
    position: home,
    map: map,
    title: 'Click to zoom',
    icon: 'img/townhouse.png'
});

//---------------------------------Info Window-----------------------------------

// Create a new infoWindow object with content
var infowindow = new google.maps.InfoWindow({
    content: "Antler's Cafe"
});

// Open the window using our map and marker
infowindow.open(map, antlermarker);

// Create a new infoWindow object with content
var infowindow = new google.maps.InfoWindow({
    content: "Home Sweet Home"
});

// Open the window using our map and marker
infowindow.open(map, homeMarker);

//------------------------------3 Favorite Restaurants---------------------------------
var myFavRests = [
    {   
        address: "111 W Crockett St #101 Ste 101, San Antonio, TX 78205",        
        name : "Paesanos",
        type : "Italian",
        review : "Absolutely loved the chicken alfredo. Have also tried the lasagna which was amazing. The Riverwalk location is so gorgeous and romantic."
    },
    {
        address: "3721 Colony Dr. San Antonio, TX 78230",
        name : "Taqeria El Rodeo De Jalisco",
        type : "Mexican",
        review : "My go to Carne Asada taco place. Love their tacos, enchiladas, tortas! Or anything on the menu!"
    },
    {
        address: "22026 US-281 #105, San Antonio, TX 78258",
        name : "MOD Pizza",
        type : "Pizzeria",
        review : "Delicious chipotle style pizzeria. Walk in and make your own."
    }
]

myFavRests.forEach(function(rest) {
    console.log(rest.address);
    var name = rest.name;
    var address = rest.address;
    var type = rest.type;
    var review = rest.review;

    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({ "address": address }, function(results, status) {

       // Check for a successful result
       if (status == google.maps.GeocoderStatus.OK) {

        var marker = new google.maps.Marker({
            position: results[0].geometry.location,
            map: map,
            title: name
        });
        // marker.addListener('click', toggleBounce);
        // }
//------------------------Info Window--------------------------

    var infowindow = new google.maps.InfoWindow({
        content: name +'<br>' + type + '<br>' + review 
    });

    infowindow.open(map, marker);

// //--------------------Toggle Bounce--------------------------        
        
//     function toggleBounce() {
//        if (marker.getAnimation() !== null) {
//          marker.setAnimation(null);
//        } else {
//          marker.setAnimation(google.maps.Animation.BOUNCE);
//        }
//    }

//---------------------------------------------------------------
    } else {

           // Show an error message with the status if our request fails
           alert("Geocoding was not successful - STATUS: " + status);
       }
    });
});


})();


