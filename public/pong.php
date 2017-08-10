<?php

require_once '../Input.php';

function pageController()
{

	$count = [];
	$count['count'] = Input::has('count') ? Input::get('count') : 0;
    return $count;
}
extract(pageController());


?>

<!-- 	$data = array();


	if(isset($_GET['count'])){
		$count = $_GET['count'];
	} else {
		$count = 0;
	}

	$result=isset($_GET['result']) ? $_GET['result'] : ""; 
	
	// $data['count'] = inputGet('count');

	$message = '';

	if($result == 'hit'){
		$message = "The Counter continues and game continues!";	
	} else if ($result == 'miss'){
		$message = "GAME OVER! Reset count to 0";
	}

	$data['count'] = $count;
	$data['message'] =$message;

	return $data;

}

extract(pageController());

?> -->

<!DOCTYPE html>
<html>
<head>
	<style>
    body{
    	background-color: pink;
    	font-family: 'Quicksand', sans-serif;
    }
    a{
    	font-size:40px;
    	color:white;
    }
    a:hover{
    	color:black;
    }
    h1{
    	font-size:50px;
    }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>

<h1>PONG Count: <?= $count ?></h1>
<!-- <p><?= $message ?></p> -->

<a href = "/ping.php?result=hit&count=<?=$count + 1?>">HIT</a>
&nbsp;
&nbsp;
<a href = "/ping.php?result=miss&count=0">MISS</a>

</body>
</html>


