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
    <title>Book Photoshoot</title>
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


<div class="col-lg-4" id="form1">
       
        <form>
        <div class="form-group">
            <br>
            First Name:
            <input style="margin-top:1%;" type="text" class="form-control" size="35" placeholder="First Name" id="txtName">
            <br>
            Surname:
            <input style="margin-top:1%;" type="text" class="form-control" size="35" placeholder="Surname" id="txtSurname">
            <br>
            Email:
            <input style="margin-top:1%;" type="text" class="form-control" size="100" placeholder="Email" id="txtEmail">
            <br>
            Event place:
            <select class="form-control form-control-sm" style="margin-top:1% " id="options">
                <option>...</option>
                <option id="home" >Home</option>
                <option id="outdoor"> Outdoor</option>
                
            </select>
            <br>
            Address:
            <input style="margin-top:1%;" type="text" class="form-control" size="100" placeholder="Address" id="address">
            
             <br>
            Date:
            <br>
            <input type="date" name="date" id="date">
            <br><br>
            Time:
            <br>
            <input type="time" name="time" id="time">
            
           
            
            </div>
    </form>
    </div>
     <input type="submit" value="submit" id="btnSubmit" onclick="validation2()">
     <script src="./eventScript.js"></script>
    </body>
</html>       