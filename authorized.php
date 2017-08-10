<?php
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
?>


<!DOCTYPE html>
<html>
<head>
<title>POST LOGIN Exercise</title>
</head>
<body>

<h1>AUTHORIZED ACCESS ONLY<h1>
<h2><?= $username; ?></h2>
<h2><?= $password; ?></h2>

<a href='login.php'>Back</a>


</body>
</html>