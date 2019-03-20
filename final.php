<?php
require 'project_connection.php';
$qty= $_POST['quantity'];
$val=$_POST['submit'];
echo $val;
$query1 = "SELECT  PRICE, PRODUCT_NAME  FROM shopping_cart where product_id='$val'";
$resultObj = $connection->query($query1);

while($row = $resultObj->fetch_assoc())
{ 
$PRI=$row['PRICE'];
$P_NAME=$row['PRODUCT_NAME'];
echo $PRI;
}

$query3="INSERT INTO PURCHASE(product, price, quantity) VALUES ('$P_NAME','$PRI','$qty')";

$resultObj2 = $connection->query($query3);
?>

