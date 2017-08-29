<?php

require __DIR__ . "/Model.php";
require __DIR__ . "/User.php";

// $data = new Model();

// echo "username is " . $data->username . PHP_EOL;

// $data->username = "bobbyTables";

// echo "username is " . $data->username . PHP_EOL;

// echo "password is " . $data->password . PHP_EOL;

// $data->password = "password123";

// var_dump($data);

$user = new User();

$user->username = "bobbyTables";

$user->password = "password123";

echo "The table is  " . User::getTableName();
