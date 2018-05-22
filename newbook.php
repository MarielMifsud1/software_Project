<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
	<header>
		<title>Insert Book</title>	
		
	</header>
	<body>
		<h1>New Vehicle</h1>
		<form method="POST" action="newbook.php" >
			<table>
				<tr><td>Title:</td>
				<td><input type="text" name="bookname"></td></tr>
				<tr><td>bookauthor:</td>
				<td><input type="text" name="bookauthor"></td></tr>
				<tr><td>Price:</td>
				<td><input type="number" name="price" step="0.01"></td>
                <tr><td>bookcategory:</td>
				<td><input type="text" name="bookcategory"></td>
                </tr>	
				<tr><td colspan="2" align="center">
				<input type="submit" name='submit' value="Insert"></td></tr>
			</table>			
		</form>
		
	</body>
</html>
<?php
	
	if (isset($_POST['submit'])) {
		$bookname = $_POST['bookname'];
		$bookauthor = $_POST['bookauthor'];        
		$price = $_POST['price'];
        $bookcategory = $_POST['bookcategory'];
		
        //Connect to db
        $conn = mysqli_connect('localhost', 'root','','books_db2','3306') or die('Cannot connect to DB');	 
        $query = "insert into books (bookname, bookauthor, bookcategory, Price)
                    values('$bookname', '$bookauthor', '$bookcategory','$price')";
        echo "<br>$query<br>";
        if(mysqli_query($conn, $query)) { 
            echo mysqli_affected_rows($conn);            
        }
        else
            echo "Error: ".mysqli_error($conn);
			
		}
						
	
?>