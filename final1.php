<?php
require 'project_connection.php';
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$password= $_POST['password'];
$email= $_POST['email'];
ECHO $firstname;
$query = "INSERT INTO signup (FIRST_NAME, LAST_NAME, EMAIL, PWD) VALUES ('$firstname','$lastname','$email','$password')";
$resultObj = $connection->query($query);

?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
</body>
</html>
