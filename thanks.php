<?php
require 'project_connection.php';

$query1 = "TRUNCATE TABLE PURCHASE;";
$resultObj = $connection->query($query1);

?>
<!DOCTYPE html>
<html>
<head>
<style>
 body{
        background-color:#FCF3CF  ;
        margin:10px;
    }
</style>
</head>
<body>
<div id="header">
    <img src="logo.jpg" width="100%" height="250px">
    </div>
<h1> Thanks for shopping!</h1>
<p>Product will be delivered to you within 2-3 working days.
Keep shopping!</p>
<a href="program.php"><img src="home.png" height="100px" width="100px"></a>
</body>
</html>