<?php

session_start();
require_once "../Auth.php";

// function clearSession(){
// 	session_unset();
// 	session_destroy();
// 	session_regenerate_id(true);
// 	session_start();
// }

// clearSession();
// header("Location:/login.php");
// exit();
Auth::logout();
header("Location: login.php");
die();




?>