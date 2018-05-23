<?php
    
    #connecting to db
    $conn = mysqli_connect("localhost","root","","books_db2")or die('Cannot connect to db');
    $query = "select bookid, bookname, bookauthor, bookcategory from books";
    $result =mysqli_query($conn, $query)
                or die ("Error in query" . mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
    <header>
        <title>All books</title>
    </header>
    <body>
        <h1>All books</h1>
        <div>
            <?php
               while($row = mysqli_fetch_assoc($result)) {
                    echo "<p>$row[bookname]</p>" ;
                    echo "<p>$row[bookauthor]</p>" ;
                    echo "<p>$row[bookcategory]</p>" ;
                    echo "<button type='button'><a href='http://localhost:8080/delbook.php?id= $row[bookid]'>Delete</a></button>" ; 
                    echo "<hr>";
               }              
            ?>
        </div>    
    </body>    
</html>

