         
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





            $conn = mysqli_connect("localhost","root","","captureit","3306") or die("Cannot connect to database");


            echo "$user"."$email"."$event"."$num"."$location"."$date"."$time";

             $query = "insert into events (booking_ID, eventType, numOfpeople, Address, Date, Time, Usernane, photographer_Id)
                        values('$book', '$event', '$num','$location','$date','$time','$user','$photo')";

                echo "<br>$query<br>";
            if(mysqli_query($conn, $query)) { 
                echo mysqli_affected_rows($conn);            
            }
            else
                echo "Error: ".mysqli_error($conn);

        }


         
}


book();


?>

