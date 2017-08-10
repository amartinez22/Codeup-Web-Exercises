<?php
var_dump($_GET);

$counter = 0;
$message = "";

if(isset($_GET['min_price']) && isset($_GET['max_price'])) {

    if($_GET['min_price'] == "" || $_GET['max_price'] == '') {
        $message = "min and max price must be given values.";
    } else {
        $message = "Showing you all the properties between " . $_GET['min_price'] . " and " 
        . $_GET['max_price'];
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Counter</title>
</head>
<body>
    <h1>Counter: <?= $counter ?> </h1>
    <h2><?= $message ?></h2>
    <a href="?">Up</a>
    <a href="?">Down</a>

    <form method="GET" action="#">
        <label for="min_price">Minimum price</label>
        <input type="text" name="min_price" id="min_price">

        <label for="max_price">Maximum price</label>
        <input type="text" name="max_price" id="max_price">

        <label for="property_type">Property type</label>
        <input type="text" name="property_type" id="property_type">
        
        <button type="submit">Search now!</button>
    </form>
</body>
</html> 