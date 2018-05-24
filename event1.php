<?php

    if(isset($_POST['submit']))
    {
        
        $email = $_POST['txtEmail'];
        $event = $_POST['options'];
        $user = $_POST['txtUser'];
         $date = $_POST['date'];
         $time = $_POST['time'];
         $location = $_POST['location'];
        
        $photo = '2';
            
        $conn = mysqli_connect("localhost","root","","captureit") or die("Cannot connect to database");
        
        echo "$email"."$event"."$user"."$date"."$time"."$photo";
        
        
        
             $query = "insert into events (eventType,Address, Date, Time, Usernane, photographer_Id)
                        values('$event','$location','$date','$time','$user','$photo')";
        
            if(mysqli_query($conn, $query)) { 
                mysqli_affected_rows($conn);  
            ?>
               
              <script> alert("Your event is booked see you there :)")</script>
               
               
               <?php
               
            }
                echo "Error: ".mysqli_error($conn);
    }

?>