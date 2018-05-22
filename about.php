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
    <link type="text/css"  rel="stylesheet" href="home_style.css">
    <title>About US</title>
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
   
   <div class="jumbotron" id="jumbo3" width="100%">
      <h1 id="jumboTitle" >About me!</h1>
      <hr class="my-4" id="jumboLine3">
      <img id="manImg"src="man.jpg" height="474px" width="262px">
      <br><br>
      <p class="lead" id="jumboText2">Inspiration to photography came from my inspiring brother. From there
      started my journey by buying my first camera took a course in basic photography. Feel so in love with the art that decided to continue my studies in Mcast and got my degree. Proud to capture my clients memoarable moments.</p>

    </div>
  
    
</body>
</html>