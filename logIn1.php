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
    <link rel="stylesheet" type="text/css" href="logIn_style.css">
    
    
    <title>Log in</title>
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
              
              <?php

                } 
                    else{
           
                ?>
                  <li class="nav-item">
                  <strong><a class="nav-link" href="./logIn1.php">Log out</a></strong>
                  </li>
              <?php
                    }
              ?>
              
              
          </ul>
          
      </div>
</nav>
   
    <br>
    
    
     <form action="./logIn.php" method="POST">


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="cancel()">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
    <script src="./eventScript.js"></script>
    

</body>
</html>
 

