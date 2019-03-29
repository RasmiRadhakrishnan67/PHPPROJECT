<?php
require 'project_connection.php';

$query = "SELECT PRODUCT_ID,PRODUCT_NAME, IMAGE, PRICE FROM shopping_cart";
$resultObj = $connection->query($query);

?>

<!DOCTYPE html>
<html>
    <head>
    <style>
    #content-body{
        margin:20px;
        background-color:#FCF3CF  ;
    }
    #header{
        margin:20px;  
    }
    
    </style>
    </head>
    <body>
    <div id="header">
    <img src="logo.jpg" width="100%" height="250px">
    </div>
        <div id="content-body">
       
       
                <div>
                    <table>
                   
                    <tr>
                        <th> PRODUCT ID</th> 
                        <th> PRODUCT NAME</th> 
                        <th> PRODUCT IMAGE</th> 
                        <th> PRODUCT PRICE</th>
                        <th> QUANTITY </th>
                     </tr>

                        <tr>
                        <?php while($row = $resultObj->fetch_assoc()): ?>
                            <td align="center">
                            <?=$row['PRODUCT_ID']?>
                            </td>
                            <td align="center">
                            <input type="text" value="<?=$row['PRODUCT_NAME']?>" name="prod_name" readonly="true"> 
            
                            </td>
                            <td align="center">
                            <img src="<?=$row['IMAGE']?>" height='50px' width='80px'>
                            </td>
                            <td align="center">
                            <input type="number" value="<?=$row['PRICE']?>" name="price" readonly="true">             
                            </td>
                            
                    
                            <td align="center">
                          
                            <button name='submit' value='<?=$row['PRODUCT_ID']?>'>+1 </button>
                           
                            </td>
                            </tr>
                        <?php endWhile; ?>
                        
                        </table>
                    
                </div>		
            </form>
        </div>
	</body>
</html>

<?php

$resultObj->close();
$connection->close();

?>