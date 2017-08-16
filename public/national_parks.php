<?php 

 require_once __DIR__ . "/../db_connect.php";
 require_once __DIR__ . "/../Input.php";
 require_once __DIR__ . "/../Park.php";


// function getParksCount($dbc){
// 	$countQuery = "SELECT COUNT(*) FROM national_parks";
//  	$stmt = $dbc->query($countQuery);
//  	$count = (int) $stmt->fetchColumn();
 
// 	return $count;
// }

// function getAllParks($dbc, $limit = 2, $offset = 0)
// {
//     $selectString = "SELECT * FROM national_parks LIMIT $limit OFFSET $offset";
//     $stmt = $dbc->query($selectString);         
//     $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $rows;
// }

// function addAPark($dbc){
//     $insert = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
//         VALUES(:park_name, :park_location, :date_established, :area_in_acres, :description)";
//     $stmt = $dbc->prepare($insert);
//     $stmt->bindValue(':park_name', $_POST['park_name'], PDO::PARAM_STR);
//     $stmt->bindValue(':park_location', $_POST['park_location'], PDO::PARAM_STR);
//     $stmt->bindValue(':date_established', $_POST['date_established'], PDO::PARAM_STR);
//     $stmt->bindValue(':area_in_acres', $_POST['area_in_acres'], PDO::PARAM_STR);    
//     $stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);    


//     $stmt->execute(); 

//     }

function pageController()
{
	$data = [];

	$page = Input::escape(Input::get('page', 1));

	$recordsPerPage = Input::escape(Input::get('recordsPerPage', 4));

	$parks = Park::paginate($page, $recordsPerPage);

	$data['parks'] = $parks;
	$data['page'] = $page;
	$data['recordsPerPage'] = $recordsPerPage;
	$data['parksCount'] = Park::count();

	if(!empty($_POST)){
		$park = new Park();

		$park->name = Input::get('park_name');
		$park->location =  Input::get('park_location');
		$park->areaInAcres = Input::get('date_established');
		$park->dateEstablished = Input::get('area_in_acres');
		$park->description = Input::get('description');
		$park->insert();

		Park::insert();
	}

	return $data;


}

extract(pageController());

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> 
     <title>National Parks BY Analyssa</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <style>
	    body {
		font-family: 'Quicksand', sans-serif;
		}
    </style>
</head>
<body>
<!-- FORM TO ADD A PARK -->
	<div>
		<form method="GET" action="national_parks.php">
			<label for="search">Search by Park Name</label>
			<input type="text" name="search" input="search" placeholder="Input park name here" autofocus>
			<button type="submit">Search</button>
		</form>
	<hr style="border-top: dotted 1px;" />
		<h4> Enter a New Park Here</h4>
		<form method="post" action="national_parks.php">
			<label for="insert">Park Name</label>
			<input type="text" name="park_name" input="insert" placeholder="Enter park name" autofocus required>
			<br>
			<label for="insert">Park Location</label>
			<input type="text" name="park_location" input="insert" autofocus required>
			<br>
			<label for="insert">Date Park Established</label>
			<input type="text" name="date_established" placeholder="YYYY" input="insert" autofocus required>
			<br>
			<label for="insert">Area of Park in Acres</label>
			<input type="text" name="area_in_acres" input="insert" autofocus required>
			<br>
			<label for="insert">Description</label>
			<input type="text" name="description" input="insert" autofocus>
			<button type="submit">Add Park</button>
		</form>
	</div>
<!-- NATIONAL PARKS FULL TABLE -->

	<div class="row text-center">
             
    <a class="col-lg-4" href="?page=<?=$page?>&recordsPerPage=4">4 Per Page</a>
    <a class="col-lg-4" href="?page=1&recordsPerPage=10">10 Per Page</a>
    <a class="col-lg-4" href="?page=1&recordsPerPage=100">100 Per Page</a>
    </div>

	<h1>National Parks</h1>
	<div class="table-bordered">

		<table class="table table-bordered">
			<thead>
				<tr class="bg-success">
					<th>Name</th>
					<th>Location</th>
					<th>Date Established</th>
					<th>Area in Acres</th>
					<th>Description</th>
				</tr>
			</thead>
		<tbody>
			<?php foreach($parks as $park): ?>
			<tr>
				<td><?= Input::escape($park->name) ?></td>
				<td><?= Input::escape($park->location) ?></td>
				<td><?= Input::escape($park->dateEstablished) ?></td>
				<td><?= Input::escape($park->areaInAcres) ?></td>
				<td><?= Input::escape($park->description) ?></td>
			<?php endforeach; ?>
			</tr>
		</tbody>
		</table>
	</div>


	<?php if ($page > 1) :?>
	<a class="btn btn-primary" href ="/national_parks.php?page=<?php echo ($page - 1) ?>&recordsPerPage=<?=$recordsPerPage?>">Previous</a>
	<?php endif; ?>
	<?php if ($page < ($parksCount / $recordsPerPage)) : ?>
	<a class="btn btn-primary" href ="/national_parks.php?page=<?php echo ($page + 1) ?>&recordsPerPage=<?=$recordsPerPage?>">Next</a>
	<?php endif; ?>
	<br>
</body>
</html>