



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="runtime/bootstrap.min.css">
    <script src="runtime/jquery-3.2.1.min.js"></script>
    <script src="runtime/popper.min.js"></script>
    <script src="runtime/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="./products.css">
    <link rel="stylesheet" type="text/css" href="home_style.css">
   
    <title>Products</title>
</head>
<body>
    
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
  
   <img src="./project_logo.png" width="100" height="80" class="d-inline-block align-middle" alt="">
   <div class="container">
       <h2>Capture it!</h2>
   </div>

  
    <div class="container-fluid" id="navbar">
    <div id="navLinks" class="col-sm-10">
        
  
   
            <ul class="nav justify-content-center">
   
        
                <li class="nav-item">
                  <strong><a class="nav-link" href="./home.php">Home</a></strong>
                </li>
                <li class="nav-item">
                  <strong><a class="nav-link" href="./about.php">About</a></strong>
                </li>
                <li class="nav-item">
                  <strong><a class="nav-link" href="./gallery.php">Portofolio</a></strong> 
                </li>
                 <li class="nav-item">
                  <strong><a class="nav-link" href="./event.php">Plan Event</a></strong> 
                </li>
                 <li class="nav-item">
                  <strong><a class="nav-link" href="./bookPhotoshoot.php">Book Photoshoot</a></strong> 
                </li>
                <li class="nav-item">
                  <strong><a class="nav-link" href="./products.php">Products</a></strong> 
                </li>
                 <li class="nav-item">
                  <strong><a class="nav-link" href="./contact.php">Contact</a></strong> 
                </li>

              </ul>
    
    </div>
     </div>
   
      <div id="signUp" class="col-sm-3">
          <ul class="nav justify-content-end">
              <li class="nav-item">
              <strong><a class="nav-link" href="./signUp1.php">Sign Up</a></strong>
              </li>
              
                   <?php
              
               
                if( !isset($_SESSION['logU']) ){ ?>
              
                   <li class="nav-item">
                  <strong><a class="nav-link" href="./logIn1.php">Log In</a></strong>
                  </li>
              
                     <li class="nav-item">
                  <strong><a class="nav-link" href="./watch2.php">My watch list</a></strong>
                  </li>
              
              <?php

                } 
                    else{
           
                ?>
                  <li class="nav-item">
                  <strong><a class="nav-link" href="./logIn.php">Log out</a></strong>
                  </li>
                  
                 
              <?php
                        
                    }
              ?>
         
              
              
          </ul>
          
      </div>
</nav>

<br>
<div class="jumbotron" id="jumbo1">
      <h1 id="jumboTitle" >Welcome to your watch list!</h1>
</div>

<?php


  if(isset($_POST['submit1']))
  {
        $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price from products where productId = 10";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $name = $row['productName'];
                    $price= $row['Price'];
                   
                   
      
                       


?>

<div class="jumbotron">
    <div class="row">
        <div class="col-sm-5">
            <img src="./images/memory.PNG" id="camera1">
        
        
        </div>
            <div class="col-sm-5" id="text">
                <br><br>
               <strong><span >Product Name:</span></strong> <span id="Pname" name="Pname"><input type="hidden" name="Pname" value=" 64GB Kingston SDXC 45MB/s Read 10MB/s Write Class 10 Flash Memory">
                   
                     <?php
                    
                    $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price from products where productId = 10";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $name = $row['productName'];
                    $price= $row['Price'];
                   
                    echo "$name";
                    
                    ?>
                  
                   
               </span>
               
               <br><br>
               <strong><span>Quantity: </span></strong><span><input type="text" id="quantity" name="quantity"></span>
               <br><br>
               <strong><span>Price: </span></strong><span id="price" name="price"><input type="hidden" name="Pname" value="31.50">
               
                 
                      <?php
                    
                    $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price from products where productId = 10";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $name = $row['productName'];
                    $price = $row['Price'];
                   
                    echo "€"."$price";
                    
                    ?>
               
               
               
               </span> 
               
        
        
  

<?php
      
      
  }

?>




  </div>
    </div>