
<?php
$val="";
require 'project_connection.php';
$val=$_POST['submit'];
$query1 = "SELECT PRICE, PRODUCT_NAME  FROM shopping_cart where product_id='$val'";
$resultObj = $connection->query($query1);

while($row = $resultObj->fetch_assoc())
{ 
$PRI=$row['PRICE'];
$P_NAME=$row['PRODUCT_NAME'];
//echo $PRI;
}

$query3="INSERT INTO PURCHASE(product, price) VALUES ('$P_NAME','$PRI')";

$resultObj2 = $connection->query($query3);
$query4 = "SELECT COUNT(PRODUCT) AS QUANTITY,PRODUCT,PRICE FROM PURCHASE GROUP BY PRODUCT";
$resultObj3 = $connection->query($query4);
$query5 = "SELECT SUM(PRICE) AS PRICE FROM PURCHASE";
$resultObj4 = $connection->query($query5);
?>

<!DOCTYPE html>
<html>
    <head>
    <style>
    body{
        background-color:#FCF3CF  ;
    }
    #table-body{
        margin:20px;
    }
    table{
       border:1px solid black;
    }
    </style>
    </head>
    <body>
    <div id="header">
    <img src="logo.jpg" width="100%" height="250px">
    </div>
    <h1> BILLING INFORMATION </h1>
    <div id="table-body">
    <table>
   
                   
                   <tr>
                       <th> PRODUCT</th> 
                       <th> PRICE</th> 
                       <th> QUANTITY </th>
                       <TH> AMOUNT</TH>
                     
                    </tr>

                       <tr>
                       <?php while($row = $resultObj3->fetch_assoc()): ?>
                       
                           <td>
                           <?=$row['PRODUCT']?>
                           </td>
                           <td>
                           <?=$row['PRICE']?>
                           </td>
                           <td>
                           <?=$row['QUANTITY']?>
                           </td>
                           <td>
                           <?=$row['QUANTITY']*$row['PRICE']?>
                           </td>
                                               
                       </tr>
                       <?php endWhile; ?>
                       <?php while($row = $resultObj4->fetch_assoc()): ?>
                       <H3>Total Amount to be paid is  <?=$row['PRICE']?></H3>
                      
                       <?php endWhile; ?>
                       <form method="POST" action="thanks.php">
                       <button type="submit"> Buy Now </button>
                       </form>
                       
    </table>
    </div>
	</body>
</html>
