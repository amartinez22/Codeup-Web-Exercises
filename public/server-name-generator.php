<?php

function randomServerVariables($input)
{
	$randomIndex =  array_rand($input);
	$output = $input[$randomIndex];
	return $output;
}

function randomServerName($arr1, $arr2)
{
	return randomServerVariables($arr1) . ' ' . randomServerVariables($arr2);
}


//gateway
//all variable defined that are being pushed to view into HTML
function pageController()
{
//get variable ready to echo
	$data = array();
	
	$adjectives = ['red', 'bearded', 'beautiful', 'brave', 'creepy', 'broad', 'colossal', 'ancient', 'bitter', 'sparse'];
	$nouns = ['toaster', 'rage', 'kitty', 'tank', 'cow', 'beam', 'police', 'wrinkle', 'antler', 'fighter'];

	$data['serverName'] = randomServerName($adjectives, $nouns);

	$data['userName'] = "Analyssa";
	
	return $data;
}

extract(pageController());

?>


<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
    <style>
    body{
    	background-color:pink;
    	font-family: 'Quicksand', sans-serif;
    }
    .header{
    	font-size:50px;
    }
    .server{
    	font-size:90px;
    	color:white;
    	border:1px solid black;
    }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>
<h1 class="header"><center>Your server name is:</center></h1>
<br>
<h2 class="server"><center><?php echo $serverName?></center></h2>
<br>
<h2><center> <?php echo $userName ?></center></h2>
</body>
</html>


<!-- // $randomAdjectiveIndex =  array_rand($adjectives);
// $randomNounIndex =  array_rand($nouns);
// $serverName = $adjectives[$randomAdjectiveIndex] . $nouns[$randomAdjectiveIndex];
// print_r($serverName);
// print_r($randomAdjective);
// print_r($randomNoun);
// print_r($serverName); -->
<!-- 
In Class Answer
function randomArrayElement($array){
	return $array[rand(0,count($array)-1)];
}

function randomServerName($arr1, $arr2){
	return randomArrayElement($arr1) . randomArrayElement($arr2);
}

// <h1><?php echorandomServerName($adjectives, $nouns); ?></h1>
 -->


