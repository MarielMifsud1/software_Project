>


<?php
	session_start();
?>
<?php


    function logIn()
    {
        
            $logUser = $_POST['Username'];
            $logPass = $_POST['pass'];
            
            $conn = mysqli_connect('localhost', 'root','','captureit') or die('Cannot connect to DB');	

            $query = "select usernane,password from userinfo where usernane='".$logUser."' and password = '".$logPass."';";

            $result = mysqli_query($conn, $query) or die ("Error in query".mysqli_error($conn));

            $row = mysqli_fetch_assoc($result);
                  
            
        
            if(mysqli_num_rows($result) > 0)
            {
               $_SESSION['logU'] = $logUser;
               $_SESSION['logP'] = $logPass;            
               header('Location: home.php');
            }
            else
                
            {
                header('Location: signUp1.php');
            }
            
    


        }
    
    logIn();




?>