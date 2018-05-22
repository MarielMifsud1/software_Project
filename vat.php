<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
	<header>
		<title>Calculate VAT</title>		
	</header>
	
	<body>
		<h1>VAT</h1>
        <form action = 'vat.php' method='POST'>
            <label for='bookname'>Book Name:</label>
            <input type='text' name ='bookname'/>
            <input type ='submit' value='Submit' name='submit'>            
        </form>
		
	</body>
</html>
<?php
    function calcVat($price) {
        return round($price * 1.18, 2);
    }

	if (isset($_POST['submit'])) {
        $bookname =$_POST['bookname'];
        if (!empty($bookname)) {
        $conn = mysqli_connect('localhost', 'root','','books_db2', '3307') or die('Cannot connect to DB');

        $query = "select Price from books where bookname='$bookname'";
            echo "<br>$query<br>";
        $result = mysqli_query($conn, $query); 
        if (!$result) 
            echo mysqli_error($conn);
            
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_row($result);
            $excVat = $row[0];            
            echo "Price exc VAT is  $excVat. Price including VAT is " .calcVat($excVat);
        }else 
            echo "no rows found!";
        
        }
        else
            echo 'Book name field cannot be left empty!';
    }
    
?>