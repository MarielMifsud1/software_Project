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
    
    <title>Contact Us</title>
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
  
     <div class="jumbotron" id="jumbo1">
      <h1 id="jumboTitle" >Contact me!</h1>
      <hr class="my-4" id="jumboLine1">
      


    </div>
    
    <div class="col-lg-4" id="form2">
       
        <form method="POST" action="./contactUs.php">
        <div class="form-group">
            <br>
        
            Email:
            <input style="margin-top:1%;" type="email" class="form-control" size="150" placeholder="Email" id="username" name="username">
            <br>
            Password:
            <input style="margin-top:1%;" type="password" class="form-control" size="150" placeholder="Email" id="pwd"  name="pwd">
            <br>
            Contact Number:
            <input style="margin-top:1%;" type="text" class="form-control" size="35" placeholder="Contact Number" id="txtContact">
            <br>
             <label for="comments" class='col-sm-2'>Comments:</label>
            <textarea type="text" id="comments" name="comments" class='form-control col-sm-10'></textarea>
           
             </div>
             <input type="submit" value="submit" id="btnSubmit" onclick="validation5()" > 
    </form>
    </div>
   
     <br><br>
      
       <div class="jumbotron" id="jumbo1">
         <h1 id="jumboTitle" >Contact info</h1>
         <hr class="my-4" id="jumboLine1">
         <p class="lead" id="jumboText">Contact number: 99895626</p>
         <p class="lead" id="jumboText">Email: mariel.mifsud.a100804@mcast.edu.mt</p>
       </div>
    
    

  
   
 <script src="./eventScript.js"></script>   
</body>
</html>