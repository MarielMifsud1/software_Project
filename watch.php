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
     <link rel="stylesheet" type="text/css" href="./products.css">
    <link rel="stylesheet" type="text/css" href="home_style.css">
   
    <title>watch list</title>
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
                  <strong><a class="nav-link" href="./products.php?productId=<?php echo $row['productId']?>">Products</a></strong> 
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
                  <strong><a class="nav-link" href="./watch.php">My watch list</a></strong>
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
   
     $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
     $query = "select watch_id,userName,productId from watch_list";
     $result =mysqli_query($conn, $query)
                or die ("Error in query" . mysqli_error($conn));
    
       while($row = mysqli_fetch_assoc($result)) {
                  
                    
                  if($row['productId'] == 7)
           {
                      
            ?>
<div class="jumbotron">
<div class="row">
<div class="col-sm-5">
            <img src="images/camera1..PNG" id="camera1">
        
        
        </div>
            <div class="col-sm-5" id="text">
                <br><br>
               <strong><span >Product Name:</span></strong>
                <span value="Pname" name="Pname"><input type="hidden" name="Pname" value="Display Gallery Item 1 Canon EOS 800D Black Digital Camera with EF-S 18-55mm Lens">
                
                <?php
                    
                    $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId  ";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $name = $row['productName'];
                    $price = $row['Price'];
                    $product = $row['productId'];
                     $_SESSION['prod'] = $product;
                   
                    echo "$name";
                    
                    ?>
                
                
                </span>
               <br><br>
               <strong><span>Quantity: </span></strong><span><input type="text" id="quantity" name="quantity"></span>
               <br><br>
               <strong><span>Price: </span></strong><span id="price" name="price"><input type="hidden" name="Pname" value="€889">
                   
                   
                   
                <?php
                    
                    $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId  ";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $productId = $row['productId'];
                    $name = $row['productName'];
                    $price = $row['Price'];
                    $_SESSION['prod'] = $product;
                    echo "€"."$price";
                    
                    ?>
               </span>
               <br><br>
                          <?php
                
                         if( !isset($_SESSION['logU']) ){
                             
                         
                
                ?>
                <script>
                    
                </script>
                <?php
                         }
                        else
                        {
                             $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId = 7";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $productId = $row['productId'];
                    $name = $row['productName'];
                    $price = $row['Price'];
                             $_SESSION['prod'] = $product;
                              
                             
                             ?>
                            
                                 
                             
                        <?php
                        }
                         
                        
                      
                            if(isset($_GET['productId']))
                            {


                                $productId = $_GET['productId'];

                                    $user = $_SESSION['logU'];

                                $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');

                                  $query  = "insert into watch_list (userName,productId)
                                values('$user','$productId')";

                                $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
                            
                                     $_SESSION['prod'] = $product;
                                ?>

                               
                                
                            
                         <?php
                        }
                
                
      
                        
                    
                ?>
              
              
                <br><br>
                
               
            </div>
  
     </div>
</div>  
<br>
                     <?php
                      
                      
                    
           }
           ?>
                   
        <?php
           
$conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
$query = "select watch_id,userName,productId from watch_list";
$result =mysqli_query($conn, $query) or die ("Error in query" . mysqli_error($conn));
    
while($row = mysqli_fetch_assoc($result)) {
                    if($row['productId'] == 8)
           {
                        ?>
               <div class="jumbotron">
    <div class="row">
        <div class="col-sm-5">
            <img src="images/bag1.PNG" id="camera1">
        
        
        </div>
            <div class="col-sm-5" id="text">
                <br><br>
               <strong><span >Product Name:</span></strong> <span id="Pname" name="Pname"><input type="hidden" name="Pname" value="Canon Custom Shoulder Gadget Bag 300EG for SLR Cameras">
               
                
                   <?php
                     
                    $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId = 8";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                    $product = $row['productId'];
                    $name = $row['productName'];
                    $price= $row['Price'];
                   
                    echo "$name"."$product";
                    
                    $_SESSION['prod'] = $product;
                    ?>
                  
               </span>
               <br><br>
               <strong><span>Quantity: </span></strong><span><input type="text" id="quantity" name="quantity"></span>
               <br><br>
               <strong><span>Price: </span></strong><span id="price" name="price"><input type="hidden" name="Pname" value="49.95">
               
                   
                            
                <?php
                    
                    $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId = 8 ";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $name = $row['productName'];
                    $price = $row['Price'];
                 $product = $row['productId'];
$_SESSION['prod'] = $product;
                   
                    echo "€"."$price";
                    
                    ?>
                   
                   
                   
               </span>
               <br><br>
               
                <?php
                
                         if( !isset($_SESSION['logU']) ){
                             
                         
                
                ?>
                <script>
                    
                </script>
                <?php
                         }
                        else
                        {
                             $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId = 8";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $productId = $row['productId'];
                    $name = $row['productName'];
                    $price = $row['Price'];
                             $product = $row['productId'];
$_SESSION['prod'] = $product;
        
                             
                             ?>
                            
                            
                        <?php
                        }
                
                 
                    
                ?>
              
               
               
               
               
                <br><br>
             
            </div>
  
     </div>
</div>  
<br>
<?php
                    
                    }
}
$conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
$query = "select watch_id,userName,productId from watch_list";
$result =mysqli_query($conn, $query) or die ("Error in query" . mysqli_error($conn));
    
    while($row = mysqli_fetch_assoc($result)) {
    
            if($row['productId'] == 9)
           {
             ?>
                  
                  <div class="jumbotron">
    <div class="row">
        <div class="col-sm-5">
            <img src="images/stand.PNG" id="camera1">
        
        
        </div>
            <div class="col-sm-5" id="text">
                <br><br>
               <strong><span >Product Name:</span></strong> <span id="Pname" name="Pname"><input type="hidden" name="Pname" value="Velbon EX-630 Tripod ">
               
                
                   <?php
                     
                    $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId = 9";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                    $product = $row['productId'];
                    $name = $row['productName'];
                    $price= $row['Price'];
                   
                    echo "$name"."$product";
                    
                    $_SESSION['prod'] = $product;
                    ?>
                  
               </span>
               <br><br>
               <strong><span>Quantity: </span></strong><span><input type="text" id="quantity" name="quantity"></span>
               <br><br>
               <strong><span>Price: </span></strong><span id="price" name="price"><input type="hidden" name="Pname" value="72.50">
               
                   
                            
                <?php
                    
                    $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId = 9 ";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $name = $row['productName'];
                    $price = $row['Price'];
                 $product = $row['productId'];
$_SESSION['prod'] = $product;
                   
                    echo "€"."$price";
                    
                    ?>
                   
                   
                   
               </span>
               <br><br>
               
                <?php
                
                         if( !isset($_SESSION['logU']) ){
                             
                         
                
                ?>
                <script>
                    
                </script>
                <?php
                         }
                        else
                        {
                             $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId = 9";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $productId = $row['productId'];
                    $name = $row['productName'];
                    $price = $row['Price'];
                             $product = $row['productId'];
$_SESSION['prod'] = $product;
        
                             
                             ?>
                            
                        <?php
                        }
                
                 
                    
                ?>
              
               
               
               
               
                <br><br>
             
            </div>
  
     </div>
</div> 
                  
                  
                   <?php
                    
           }
       }
       }
    
$conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
$query = "select watch_id,userName,productId from watch_list";
$result =mysqli_query($conn, $query) or die ("Error in query" . mysqli_error($conn));
    
    while($row = mysqli_fetch_assoc($result)) {
    
                     if($row['productId'] == 10)
           {
               ?>
                  
                   <br>
<div class="jumbotron">
    <div class="row">
        <div class="col-sm-5">
                     <img src="images/memory.PNG" id="camera1">
        
        
        </div>
            <div class="col-sm-5" id="text">
                <br><br>
               <strong><span >Product Name:</span></strong> <span id="Pname" name="Pname"><input type="hidden" name="Pname" value="64GB Kingston SDXC 45MB/s Read 10MB/s Write Class 10 Flash Memory  ">
               
                
                   <?php
                     
                    $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId = 10";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                    $product = $row['productId'];
                    $name = $row['productName'];
                    $price= $row['Price'];
                   
                    echo "$name"."$product";
                    
                    $_SESSION['prod'] = $product;
                    ?>
                  
               </span>
               <br><br>
               <strong><span>Quantity: </span></strong><span><input type="text" id="quantity" name="quantity"></span>
               <br><br>
               <strong><span>Price: </span></strong><span id="price" name="price"><input type="hidden" name="Pname" value="31.50">
               
                   
                            
                <?php
                    
                    $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId = 10 ";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $name = $row['productName'];
                    $price = $row['Price'];
                 $product = $row['productId'];
$_SESSION['prod'] = $product;
                   
                    echo "€"."$price";
                    
                    ?>
                   
                   
                   
               </span>
               <br><br>
               
                <?php
                
                         if( !isset($_SESSION['logU']) ){
                             
                         
                
                ?>
                <script>
                    
                </script>
                <?php
                         }
                        else
                        {
                             $conn = mysqli_connect("localhost","root","","captureit")or die('Cannot connect to db');
              
                   $query  = "select productName,Price,productId from products where productId = 10";

                    $result = mysqli_query($conn, $query)  or die ("Error in query" . mysqli_error($conn));
             
                    $row = mysqli_fetch_assoc($result); 
                   
                    $productId = $row['productId'];
                    $name = $row['productName'];
                    $price = $row['Price'];
                             $product = $row['productId'];
$_SESSION['prod'] = $product;
        
                             
                             ?>
                             
                        <?php
                        }
                
                 
                    
                ?>
              
               
               
               
               
                <br><br>
             
            </div>
  
     </div>
</div> 

                   
                   <?php
                    
           }
    }
          
           
               
       
         
  
       
         
   
        
  
   
        
?>       

            
                <br><br>
                
               
               

</body>
</html>













