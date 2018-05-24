<?php

    function signUp()
    {
        $name = $_POST['txtName'];
        $surname = $_POST['txtSurname'];
        $email = $_POST['txtEmail'];
        $user = $_POST['txtUser'];
        $pass = $_POST['pass'];


        $conn = mysqli_connect('localhost', 'root','','captureit','3306') or die('Cannot connect to DB');	


         if(!empty($name))
                {
                    echo true;
                }
                else
                    echo false;
        
         if(!empty($surname))
         {
             echo true;
         }
        else
            echo false;
        
        if(!empty($email))
        {
            echo true;
        }
        else
            echo false;
        
        if(!empty($user))
        {
            echo true;
        }
        else
        {
            echo false;
        }
        if(!empty($pass))
        {
            echo true;
        }
        
        
        
        
        
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