<?php

require_once "Park.php";

// test dbConnect() and Park::$connection

	// Park::dbConnect();
	// var_dump(Park::$dbc);


// test Park::count()
	
	// echo "There are " . Park::count() . " parks in the parks table.";


// test Park::all()

	// var_dump(Park::all());

	// $allParks = Park::all();

	// echo "Park 1 details..." . PHP_EOL;

	// echo $allParks[0]->name . PHP_EOL;
	// echo $allParks[0]->location . PHP_EOL;
	// echo $allParks[0]->dateEstablished . PHP_EOL;
	// echo $allParks[0]->areaInAcres . PHP_EOL;
	// echo $allParks[0]->description . PHP_EOL;



// test Park::paginate()
	// echo "Pagination Begins..." . PHP_EOL;

	// print_r(Park::paginate(1));
	// print_r(Park::paginate(2));
	// print_r(Park::paginate(2, 2));
	// print_r(Park::paginate(1, 8));



// test inserting a new park

	// $park = new Park();

	// $park->name = "Frio River Park";
	// $park->location = "Texas";
	// $park->areaInAcres = 700;
	// $park->dateEstablished = '1913';
	// $park->description = 'Yadda yadda';
	// $park->insert();

//
$park = [
'name' => 'Glacier National Park',
'location' => 'Montana',
'area_in_acres' => '7000',
'date_established' => '1902',
'description' => 'Montana is huge'
];

$park = new Park($parkArray);

$park->insert();

// $anotherPark = Park::find(2);

// $anotherPark->description = "Really awesome park is awesome and parky";

// $anotherPark->save();

// $park = Park::find(3);

// $park->delete();











?>