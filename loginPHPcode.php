<?php session_start();
mysqli_connect ( "fdb16.biz.nf", "2349089_account", "Gokuisssj10" );

if (isset ( $_POST ['submit'] )) {
	$servername = "fdb16.biz.nf";
	$username = "2349089_account";
	$password = "Gokuisssj10";
	$dbname = "2349089_account";
	
	$userName = $_POST ["userName"];
	$password1 = $_POST ["password1"];
	
	$userName = filter_var($userName, FILTER_SANITIZE_STRING);
	$password1 = filter_var($password1, FILTER_SANITIZE_STRING);
	
	$message = "Login successful!";
	$message2 = "Invalid username and/or password.";
	
	$conn = new mysqli ( $servername, $username, $password, $dbname );
	if ($conn->connect_error) {
		die ( "Connection failed: " . $conn->connect_error );
	}
	
	mysqli_select_db ( $conn, "2349089_account" ) or die ( "no db found" );
	
	$query1 = $conn->query ( "SELECT * FROM user WHERE username='$userName'
and password= '$password1'" );
	
	//If you can log in
	$row_count = $query1->num_rows;
	if ($row_count == 1) {
		
		$name = $conn->query ("SELECT first_name FROM user WHERE username='$userName'");
		$row = mysqli_fetch_assoc($name);
		$rowCollector = $row['first_name'];
		
		$_SESSION['logged_in'] = true;
		$_SESSION['userName'] = $userName;
		
		$_SESSION['TotalCorrect'] = 0;
		$_SESSION['TotalWrong'] = 0;
		
		echo "<script language='javascript'>
		this.localStorage.setItem('firstname', '$rowCollector'); </script>";
		
// 		echo "<script language='javascript'>
// 	    this.localStorage.setItem('username', '$userName'); </script>";
		//set username in local storage to the current username
		
		//header ( 'Location: index.php' );
		echo "<script type='text/javascript'>alert('$message');
		window.location.href = 'index.php';
		</script>";
		
		//If you can't log in, you still store the variable
	} else {
		//header ( 'Location: login.php' );
		$_SESSION['userNameHold'] = $userName;
		echo "<script type='text/javascript'>alert('$message2');
		window.location.href = 'login.php';
		</script>";
		
	}
	
	$conn->close ();
}

?>