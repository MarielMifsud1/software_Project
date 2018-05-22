<!DOCTYPE html>
<html>
<head>
    <title>Books - Delete books</title>
</head>
<body>
<?php
     #connecting to db
    $conn = mysqli_connect('localhost', 'root', '', 'books_db2', '3307') 
        or die('Cannot connect to db');
    $id = $_GET['id'];
    $query = "Delete from books where bookid = '$id'";
    mysqli_query($conn, $query) or die ('Error in query');
    echo "Customer with id $id has been removed";
    ?>
</body>
</html>