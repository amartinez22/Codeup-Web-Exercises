
<!-- 
// $username = isset($_POST['username']) ? $_POST['username'] : '';
// $password = isset($_POST['password']) ? $_POST['password'] : '';

// if ($_POST['username'] = 'guest' && $_POST['password'] = 'password'){
// 	header("Location:/authorized.php");
// 	exit();
// } -->

<?php
require_once 'phplibrary.php';
session_start();

$username = $_SESSION['logged_in_user'];

//check to see if $_SESSION has a logged_in_user key/value, if so redirect to authorized.php
//check to see if user is logged in. if not , getm back to login.php
if(!isset($_SESSION['logged_in_user'])){
	header("Location:/login.php");
		exit();
}


?>


<!DOCTYPE html>
<html>
<head>
<title>POST LOGIN Exercise</title>
</head>
<body>
<h1>***** AUTHORIZED ACCESS ONLY *****<h1>
<h1> Welcome back <?= escape($username) ?></h1>
<!-- <h2><?= $username; ?></h2>
<h2><?= $password; ?></h2> -->
<a href='logout.php'>Logout</a>



</body>
</html>