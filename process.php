<?php

    $name = $_POST['firstname'];
    $surname = $_POST['lastname'];
    $age = $_POST['age'];

    if($age > 15)
    {
        echo "You have been successful registered";
    }
    else
    {
        echo "You are not old enough to register";
    }

?>