<?php
function pageController()
{
	$data = [];
	$nickname=(isset($_POST['nickname'])) ? $_POST['nickname'] : "undefined";
	$data['post'] = $post;

if ($nickname == "Justin"){
	header("Location:http://www.cornify.com");
	exit();
}

	return $data;
}

extract($pageController());
?>

<!DOCTYPE html>
<html>
<head>
<title>Nickname</title>
</head>
<body>

<h1>Nickname is... <?= $nickname ?></h1>

<form method='POST'>
	<label for "Nickname">Nickname</label>
	<input type="text" name="nickname" id="nickname">
	<button type="submit">Submit</button>
</form>

</body>
</html>