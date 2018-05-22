<?php
                
          function getProducts()
              
          {
              
               $conn = mysqli_connect("localhost","root","","captureit","3307")or die('Cannot connect to db');
              
               $query  = "select productName,Price from products where productId = '8'";
              
               $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
               $row = mysqli_fetch_assoc($result); 
                   
                    $name = $row['productName'];
                   $price = $row['Price'];
                   
                   echo "$name"."<br>"."$price";
                   
               
              
          }


    getProducts();

?>
   