<?php
var_dump($_SESSION);

session_start();

//get current session ID
$sessionID = session_id();

//initialize a view count variable
$viewCount = isset($_SESSION)['view_count'] ? $_SESSION['view_count'] : 0;

//initialize the counter
$viewCount++;

//finally, store the new value in the session
$_SESSION['view_count'] = $viewCount;

if(isset($_GET['logout'])) {
	logout():
	header("Location: sessions.php");
	echo "You have been successfully logged out!"
}

function logout()
{
	session_unset();
	session_destroy();
	session_regenerate_id(true);
}

?>


<!DOCTYPE html>
<html>
<head>
<title>Session Example</title>
</head>
<body>
	<ul>
		<li>Session ID: <?= $sessionID; ?></li>
		<li>View Count: <?= $viewCount; ?></li>
	</ul>

	<form method="GET">
		<button name='logout' value='yes'>Logout</button>
	</form>

</body>
</html>