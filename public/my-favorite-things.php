<?php


function pageController()
{
	$data = array();

	$myFavThings = ['Volleyball', 'My Pup Sadie', 'CSS', 'My Family', 'Crafting'];

	$data['myFavThings'] = $myFavThings;

	return $data;
}
//turns keys into variable names
//extracts the associative array from the page Controller function
extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Fav Things List</title>
    <style>
    body{
    	background-color: pink;
    	font-family: 'Quicksand', sans-serif;
    }
    .table{
    	border:1px solid white;
    }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>

<body>

<h1><center>My Favorite Things</center></h1>

<table class="table table-striped" style="width:100%">
<!-- <table class="table table-striped"> -->
<tr>
	<?php foreach($myFavThings as $thing): ?>
	<th><?= $thing; ?></th></tr>
	<?php endforeach; ?>
</table>

</body>
</html>


function pageController()
{
	$favoriteThings = ['Volleyball', 'My Pup Sadie', 'CSS', 'My Family', 'Crafting'];
	$randomThing = $favoriteThings[array_rand($favoriteThings)];

	return [
	'favoriteThings' => $favoriteThings,
	'thingOfTheDay' => $randomThing,
	];
}















