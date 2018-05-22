<?php

    if(isset($_POST['submit']))
    {
        
        $email = $_POST['txtEmail'];
        $event = $_POST['options'];
        $user = $_POST['txtUser']
        
        $photo = '2';
            
        $conn = mysqli_connect("localhost","root","","captureit","3306") or die("Cannot connect to database");
        
        echo "$email"."$event"."$user"."$book"."$photo"
        
        if($event == "Wedding")
        {
            $query = "insert into events ( eventType, Usernane, photographer_Id)
                        values( '$event','$user','$photo')";
        }
        
    
        
    }


?>