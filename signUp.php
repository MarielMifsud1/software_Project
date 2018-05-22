<?php

    function signUp()
    {
        $name = $_POST['txtName'];
        $surname = $_POST['txtSurname'];
        $email = $_POST['txtEmail'];
        $user = $_POST['txtUser'];
        $pass = $_POST['pass'];


        $conn = mysqli_connect('localhost', 'root','','captureit','3306') or die('Cannot connect to DB');	



            $query = "insert into userinfo (Name, Surname, Email, Usernane, Password)
                            values('$name', '$surname', '$email','$user','$pass')";

             echo "<br>$query<br>";
                if(mysqli_query($conn, $query)) { 
                    echo mysqli_affected_rows($conn);            
                }
                else
                    echo "Error: ".mysqli_error($conn);
			
    
    }

    signUp();
    

?>