<?php


        if(isset($_POST['submit']))
    {
        
        
        $user = $_POST['txtUser'];
        $event = $_POST['options'];
        $add = $_POST['address'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $book = '';
        $photo = '2';
            
        $conn = mysqli_connect("localhost","root","","captureit","3306") or die("Cannot connect to database");
        
        echo "$event"."$user"."$book"."$photo";
            
      
         $query = "insert into events (booking_ID, eventType, Address, Date, Time, Usernane, photographer_Id)
                        values('$book', '$event','$add','$date','$time','$user','$photo')";
     
                 echo "<br>$query<br>";
            if(mysqli_query($conn, $query)) { 
                echo mysqli_affected_rows($conn);            
            }
            else
                echo "Error: ".mysqli_error($conn);

    
        
    }


?>