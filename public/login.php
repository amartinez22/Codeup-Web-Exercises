<?php

require_once 'phplibrary.php';
require_once "../Auth.php";

session_start();

function pageController()
{
	$data = [];

	if(Auth::check()){
		header("Location: authorized.php");
		die();
	}

	$message = "";

	$username = Input::get('username');

	$password = Input::get('password');

	if(!empty($_POST)){
		
	}















	if(isset($_SESSION['logged_in_user'])){
	header("Location:/authorized.php");
		exit();
	}

	$message = "";
	// $username = isset($_POST['username']) ? $_POST['username'] : '';
	$username = inputGet('username');
	// $password = isset($_POST['password']) ? $_POST['password'] : '';
	$password = inputGet('password');
	//user submitted the form
	if(!empty($_POST)){

	if ($username == 'guest' && $password == 'password'){
		$_SESSION['logged_in_user'] = $username;
		header("Location:/authorized.php");
		exit();
	} else {
		$message = "Invalid login!";
	}

	return $data;

}


extract(pageController());

// if(!empty($_POST)){

// 	if($username == 'guest' && $password == 'password'){
// 		header("Location:/authorized.php");
// 		exit();
// 	} else {
// 		$message = "Invalid login!";
// 	}
// }

// $data = [
// "username" => $username,
// "password" => $password,
// "message" => $message
// ];

?>


<!DOCTYPE html>
<html>
<head>
<title>POST LOGIN Exercise</title>
</head>
<body>
<h1>Login to your super secure site!<h1>
<p><?= $message ?></p>


<form method='post'>
<!-- <form action='authorized.php' method='post'> -->
	<label for "username">Username</label>
	<input type="text" name="username" id="username">
	<label for "password">Password</label>
	<input type="password" name="password" id="password">
	<button type='submit'>Submit</button>
</form>
<a href='logout.php'>Back</a>
</body>
</html>