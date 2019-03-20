<?php

$dbPassword = "shopping123";
$dbUserName = "shopping";
$dbServer = "localhost";
$dbName = "shopping_cart";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

?>