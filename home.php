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
    <link rel="stylesheet" href="./home_style.css">


    <title>Home page</title>
  
    </head>
<body>
 <p hidden >  
 <audio controls autoplay>
  <source src="./Nice%20intro%20music.mp3" type="audio/ogg">
  Your browser does not support the audio element.
 </audio>
  </p>
  

   
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
              
              <?php

                } 
                    else{
           
                ?>
                  <li class="nav-item">
                  <strong><a class="nav-link" href="./logIn.php">Log out</a></strong>
                  </li>
                  
                 <li class="nav-item">
                  <strong><a class="nav-link" href="#">My watch list</a></strong>
                  </li>
              <?php
                    }
              ?>
              
              
              
          </ul>
          
      </div>
</nav>
    
  <div class="container-fluid" id="main2">
  <img id="main" src="main.jpg" width="110%" height="10%">
   </div>
   
   <div class="jumbotron" id="jumbo1">
      <h1 id="jumboTitle" >Welcome to Capture it!</h1>
      <hr class="my-4" id="jumboLine1">
      <p class="lead" id="jumboText">Sincerly hope that each and every user entering our website will find exactly
       he/she is looking for.</p>


    </div>
    
 
    
</body>
</html>