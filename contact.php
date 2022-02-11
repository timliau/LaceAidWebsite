<?php
		// database connection code
		// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

		$host = 'localhost';
		$user = 'testuser';
		$pwd = 'D6I]EW]e2Z@g7T.R';
		$db = 'laceaid';

		$conn = mysqli_connect($host, $user, $pwd, $db);
		  
		if (!$conn) {
    	die("ERROR in connection: " . mysqli_connect_error());
		}

		// get the post records
		$txtName = $_POST['name'];
		$txtEmail = $_POST['email'];
		$txtPhone = $_POST['subject'];
		$txtMessage = $_POST['message'];

		// database insert SQL code
		$sql = "INSERT INTO `messages` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES (NULL, '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

		if($conn->query($sql) === TRUE) {
    		echo "Insert success";
		} 
		else {
    		echo "Error: " . $mysql_qry . "<br>" . $conn->error;
		}

		mysqli_close($conn);

	?>
