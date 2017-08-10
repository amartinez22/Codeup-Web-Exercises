<?php

function pageController()
{
	$data = array();

	if(isset($_GET['count'])){
		$count = $_GET['count'];
	} else {
		$count = 0;
	}
// terninary option
// $count = isset($_GET['count'] ? $_GET['count'] : 0;


	$data['count'] = $count;

	return $data;

}

extract(pageController());

?>



<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1>Current Counter Value : <?php echo $count; ?></h1>
<a href = "/counter.php?count=<?=$count +1?>">Up</a>
<a href = "/counter.php?count=<?=$count -1?>">Down</a>

</body>
</html>
