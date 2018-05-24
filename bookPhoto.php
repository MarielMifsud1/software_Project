         
<?php

     

    function book(){
         
        if (isset($_POST['submit'])) {

            $user = $_POST['txtUser'];
            $email = $_POST['txtEmail'];
            $event = $_POST['options'];
            $num = $_POST['options2'];
            $location = $_POST['location'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $book = '';
            $photo = '2';

            if(!empty($event))
            {
                echo true;
            }
            else
                echo false;




            $conn = mysqli_connect("localhost","root","","captureit","3306") or die("Cannot connect to database");


            

             $query = "insert into events (booking_ID, eventType, numOfpeople, Address, Date, Time, Usernane, photographer_Id)
                        values('$book', '$event', '$num','$location','$date','$time','$user','$photo')";

              
            
            if(mysqli_query($conn, $query)) { 
                mysqli_affected_rows($conn);  
                
            
               ?>
               
              <script> alert("Your photoshoot is booked see you there :)")</script>
               
               
               <?php
               
            }
           
            else
                echo "Error: ".mysqli_error($conn);

        }


         
}


book();


?>

