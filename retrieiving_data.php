<?php
require_once 'env.php';
require_once 'db_connect.php';

// Create query and call query method from the object created to make the DB connection
$query = 'SELECT * FROM departments';
$stmt = $connection->query($query);
var_dump($stmt);


// Getting information about results set (Metadata)
//Gives you a PDO statement
echo $stmt->columnCount() . PHP_EOL;
echo $stmt->rowCount() . PHP_EOL;

// Fetching Data
	//Caveman way of fetching results
	// gives you back 1st parameter
	// gives you array dept_no =>d009 [0] => d009
	$record1 = $stmt->fetch();
	print_r($record1);

	// Dynamic Way of fetching results
	//looped thru every dept
	do {
		$result = $stmt->fetch();
		print_r($result);
	} while ($result);

	//alternative syntax
	while ($result = $stmt->fetch()){
		print_r($result)
	}
	//get keys
	while ($result = $stmt->fetch(PDO::FETCH_NUM)){
		print_r($result)
	}

	//PDO:FETCH_BOTH(default option)

// Fetching Data

	//MIXED or other results of associative and numeric indexed elements
	$results = $stmt->fetchAll(PDO::FETCH_NUM);
	print_r($results);

	// Outputting results (nomally done in a view)
	// PDO::FETCH_ASSOCIATIVE
	foreach($results as $result){
		echo $result['dept_no'] . ' ' . $result['dept_name'] . PHP_EOL;
	}


	//Fetching a piece of data from a single column
	//if we don't want the entire row
	//cant do fetch twice the second one won't work
	//gives you very first one as it is in the table
	$result = $stmt->fetchColumn();
	var_dump($result);

	







