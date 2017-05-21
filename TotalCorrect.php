<?php session_start();

if (isset($_POST ['submit'] )) {
	$conn = mysqli_connect ( "fdb16.biz.nf", "2349089_account", "Gokuisssj10" );

	$servername = "fdb16.biz.nf";
	$username = "2349089_account";
	$password = "Gokuisssj10";
	$dbname = "2349089_account";
	
	$userName = $_SESSION['userName'];
	
	$userName = filter_var($userName, FILTER_SANITIZE_STRING);
	
	if ($conn->connect_error) {
		die ( "Connection failed: " . $conn->connect_error );
	}
	
	mysqli_select_db ( $conn, "2349089_account" ) or die ( "no db found" );
	
	//$TotalCorrect = $_SESSION['QuizCorrect'];
	//$TotalWrong = $_SESSION['QuizWrong'];
	
	$TotalCorrect = $_COOKIE["correctCOOKIE"];
	$TotalWrong = $_COOKIE["incorrectCOOKIE"];

	if((isset($_SESSION['logged_in'])))
	{
		
	mysqli_query( $conn, "UPDATE user 
					SET TotalCorrect = '$TotalCorrect'
					WHERE username = '$userName'" );
	
	
	
	mysqli_query( $conn, "UPDATE user 
					SET TotalWrong = '$TotalWrong'
					WHERE username = '$userName'" );
					
				echo"<script>this.localStorage.setItem('QuizCorrect','0');
			    this.localStorage.setItem('QuizWrong','0');</script>";
				 
				echo "<script type='text/javascript'>alert('It has been saved!');
				window.location.href = 'index.php';
				</script>";
		$conn->close ();
	}
	
}


	


?>