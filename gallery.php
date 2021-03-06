<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="runtime/bootstrap.min.css">
    <script src="runtime/jquery-3.2.1.min.js"></script>
    <script src="runtime/popper.min.js"></script>
    <script src="runtime/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="home_style.css">
    <link rel="stylesheet" type="text/css" href="galleryStyle.css">
    <title>Portofolio</title>
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
                  <strong><a class="nav-link" href="#">Products</a></strong> 
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
    
      <div class="jumbotron" id="jumboTitle">
          <h1 id="jumboTitle" >Welcome to the portofolio</h1>
          <hr class="my-4" id="jumboLine1">
      </div>
    
    <div class="row"> 
  <div class="column">
    <img src="./images/image1.jpg" style="width:100%">
    <img src="./images/image2.jpg" style="width:100%">
    <img src="./images/image3.jpg" style="width:100%">
    <img src="./images/image4.jpg" style="width:100%">
    <img src="./images/image5.jpg" style="width:100%">
    <img src="./images/image6.jpg" style="width:100%">
    <img src="./images/image13.jpg" style="width:100%">
    <img src="./images/image14.jpg" style="width:100%">
    <img src="./images/image15.jpg" style="width:100%">
    <img src="./images/image16.jpg" style="width:100%">
  </div>
    
   
    
      <div class="column">
    <img src="./images/image7.jpg" style="width:100%">
    <img src="./images/image8.jpg" style="width:100%">
    <img src="./images/image9.jpg" style="width:100%">
    <img src="./images/image10.jpg" style="width:100%">
    <img src="./images/image11.jpg" style="width:100%">
    <img src="./images/image12.jpg" style="width:100%">
    <img src="./images/image17.jpg" style="width:100%">
    <img src="./images/image18.jpg" style="width:100%">
    <img src="./images/image19.jpg" style="width:100%">
    <img src="./images/image20.jpg" style="width:100%">
  </div>  
   </div>
   
   <button onclick="goTop()" id="topBtn" title="Scroll to top">Go to Top</button>
<script src="gallery.js"></script>
</body>
</html>