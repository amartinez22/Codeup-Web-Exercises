<?php
require_once "env.php";
require_once "db_connect.php";

$dbc->exec('DROP TABLE IF EXISTS national_parks');

$createParksTable = "CREATE TABLE IF NOT EXISTS national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    location varchar(255) NOT NULL,
    date_established YEAR(4) NOT NULL,
    area_in_acres DOUBLE(15,2) NOT NULL,
    description VARCHAR(1500) NOT NULL,
    PRIMARY KEY (id)
    );";

$dbc->exec($createParksTable);
echo "parks table successfully created" . PHP_EOL;

