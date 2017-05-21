<?php
session_start();

if (isset ( $_POST ['submit'] )) {
	mysqli_connect ( "fdb16.biz.nf", "2349089_account", "Gokuisssj10" );

	$servername = "fdb16.biz.nf";
	$username = "2349089_account";
	$password = "Gokuisssj10";
	$dbname = "2349089_account";
	
	$userName = $_POST ["userName"];
	$firstName = $_POST ["firstName"];
	$lastName = $_POST ["lastName"];
	$email = $_POST ["email"];
	$hashThis = $_POST["password1"];
	$Pretendpassword1 = hash('sha256', $hashThis);
	$password1 = $_POST["password1"];
	$usrtel = $_POST ["usrtel"];
	$message = "Username already exists. Try again.";
	
	
	$userName = filter_var($userName, FILTER_SANITIZE_STRING);
	$firstName = filter_var($firstName, FILTER_SANITIZE_STRING);
	$lastName = filter_var($lastName, FILTER_SANITIZE_STRING);
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	$password1 = filter_var($password1, FILTER_SANITIZE_STRING);
	$usrtel = filter_var($usrtel, FILTER_SANITIZE_NUMBER_INT);
	
	// Create connection
	$conn = new mysqli ( $servername, $username, $password, $dbname );
	// Check connection
	if ($conn->connect_error) {
		die ( "Connection failed: " . $conn->connect_error );
	}
	mysqli_select_db ( $conn, "2349089_account" ) or die ( "no db found" );
	
	$query1 = $conn->query ( "SELECT * FROM user WHERE userName='$userName'" );
	
	$row_count = $query1->num_rows;
	//problem logging in
	if ($row_count == 1) {
		$_SESSION['userNameSIGNUP'] = $userName;
		$_SESSION['firstNameSIGNUP'] = $firstName;
		$_SESSION['lastNameSIGNUP'] = $lastName;
		$_SESSION['password1SIGNUP'] = $password1;
		$_SESSION['emailSIGNUP'] = $email;
		$_SESSION['usrtelSIGNUP'] = $usrtel;
		echo "<script type='text/javascript'>alert('$message');
	window.location.href = 'signup.php';
	</script>";
		
		// header('Location: index.php ');
	} else {
		
		$sql = "INSERT INTO user (username, first_name, last_name, email_address, password, usrtel)
VALUES ('$userName', '$firstName', '$lastName', '$email', '$password1', '$usrtel');";
		
		if ($conn->query ( $sql ) === TRUE) {
			
			$_SESSION['logged_in'] = true;
			$_SESSION['userName'] = $userName;
			

// 			echo "<script language='javascript'>
//         	this.localStorage.setItem('username', '$userName'); </script>";
			//setting local storage of username to current username
			
			//header ( 'Location: index.php' );
			echo "<script type='text/javascript'>alert('Login Successful!');
				window.location.href = 'index.php';
			</script>";
						
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close ();
}

?>