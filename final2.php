<?php
require 'project_connection.php';
$password= $_POST['password'];
$email= $_POST['email'];

$query = "SELECT * FROM SIGNIN WHERE EMAIL='$email' AND PWD='$password'";
$resultObj = $connection->query($query);
echo $resultObj;
if($resultObj==0)
{
    echo "Invalid username or password";
    echo $resultObj;
}
else{
    echo "Successfully logged in";
}
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
</body>
</html>
