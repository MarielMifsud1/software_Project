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
    <title>Wedding Event</title>
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
                  <strong><a class="nav-link" href="./about.html">About</a></strong>
                </li>
                <li class="nav-item">
                  <strong><a class="nav-link" href="./gallery.html">Portofolio</a></strong> 
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
              <strong><a class="nav-link" href="./signUp.html">Sign Up</a></strong>
              </li>
              
                  
                   <?php
              
               
                if( !isset($_SESSION['logU']) ){ ?>
              
                   <li class="nav-item">
                  <strong><a class="nav-link" href="./logIn.html">Log In</a></strong>
                  </li>
              
              <?php

                } 
                    else{
           
                ?>
                  <li class="nav-item">
                  <strong><a class="nav-link" href="./logIn.html">Log out</a></strong>
                  </li>
              <?php
                    }
              ?>
         
         
              
             
          </ul>
          
      </div>
</nav>
   
   <div class="col-lg-4" id="form1">
       
        <form method="POST" action="./event1.php">
        <div class="form-group">
            <br>
             Bride Name and Surname:
            <input style="margin-top:1%;" type="text" class="form-control" size="35" placeholder="Name and Surname" id="BrideName">
            <br>
            Groom Name and Surname:
            <input style="margin-top:1%;" type="text" class="form-control" size="35" placeholder="Name and Surname" id="GroomName">
            <br>
            Email:
            <input style="margin-top:1%;" type="text" class="form-control" size="100" placeholder="Email" id="txtEmail">
            <br>
            Bride Address:
            <input style="margin-top:1%;" type="text" class="form-control" size="100" placeholder="Bride Address" id="BAddress">
            <br>
            Groom Address:
            <input style="margin-top:1%;" type="text" class="form-control" size="100" placeholder="Groom Address" id="GAddress">
            <br>
            Location of church:
            <input style="margin-top:1%;" type="text" class="form-control" size="100" placeholder="Location of church" id="Lchurch">
            <br>
            Location of Wedding hall:
            <input style="margin-top:1%;" type="text" class="form-control" size="100" placeholder="Location of wedding hall" id="Lhall">
            <br>
            Where to start shooting:
             <select class="form-control form-control-sm" style="margin-top:1%" id="options3">
                <option>....</option>
                <option>Groom</option>
                <option>Bride</option>
                
            </select>
            <br>
            <input type="submit" value="submit" id="btnSubmit" onclick = "validation4()">
            <script src="./eventScript.js"></script>
            
            </div>
       </form>
    </div>
</body>
</html>