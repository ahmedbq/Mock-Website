<?php session_start();
	include_once ("timeout.php");
	
	$servername = "fdb16.biz.nf";
	$username = "2349089_account";
	$password = "Gokuisssj10";
	$dbname = "2349089_account";
	
	$userName = $_SESSION['userName'];
	
	// Create connection
	$conn = new mysqli ( $servername, $username, $password, $dbname );
	// Check connection
	if ($conn->connect_error) {
		die ( "Connection failed: " . $conn->connect_error );
	}
	mysqli_select_db ( $conn, "2349089_account" ) or die ( "no db found" );
	
		$rowCollector = $row['first_name'];
	
	$correct1 = $conn->query ( "SELECT TotalCorrect FROM user WHERE username='$userName'" );
	$correct2 = mysqli_fetch_assoc($correct1);
	$correct = $correct2['TotalCorrect'];
	
	$wrong1 = $conn->query ( "SELECT TotalWrong FROM user WHERE username='$userName'" );
	$wrong2 = mysqli_fetch_assoc($wrong1);
	$wrong = $wrong2['TotalWrong'];
	
	$total = $correct + $wrong;

	if ($total == 0)
	{
		$percent = 0;
	}
	
	else
	{
	$percent = ($correct/($correct + $wrong)) * 100;
	}

		
	?>

	<!DOCTYPE html>
	<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>User Statistics</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<script src="script.js"></script>

	</head>
	<body>
		<header>
			<center><img src = "Quizzer.png" title = "Quizzer Logo" alt = "The logo for the Quizzer website."></center>
			<!--INSERT LOGO-->
		</header>
		<!-- Top Navbar-->
		<ul class="menuList" id = "menuListSurvey">
			<li><a href="index.php">Home</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li class="dropdown">
				<a href="#" class="dropbtn">Account</a>
				<div class="dropdown-content">
					<a href="login.php">Login</a>
					<a href="signup.php">Sign Up</a>
				</div>
			</li>
			<li><a href="survey.php">Survey</a></li>
			<li><a href= "relatedlinks.php">Related</a></li>
            <li><a href="trivia.php">Trivia</a></li>
            <li><a href="stats.php">Stats</a></li>
			<?php if(isset($_SESSION['logged_in']))
			{echo "<li><a href='UserStatistics.php'>User Statistics</a></li>"; }
			?>

		</ul>


		<p>
			<center>
				<h2>User Statistics</h2>
			</center>
		</p>
		
		<h3>Name: <?php echo $_SESSION['userName']; ?> </h3>
		<h3>Total correct: <?php echo $correct ?> </h3>
		<h3>Total wrong: <?php echo $wrong; ?></h3>
		<h3>Percent correct: <?php echo $percent . '%'; ?> </h3>


		

		<footer class="footer">
			<p>
			<?php if(isset($_SESSION['logged_in']))
			{echo "<p><h3><a href='logout.php'>Logout</a><h3></p>"; }
			?>
				<center><a href="index.php">Home</a>
					<a href="relatedlinks.php">Related-Links</a>
					<a href="aboutus.php">About-Us</a>
					<a href="login.php">Login</a>
					<a href="signup.php">Sign-Up</a>
					<a href="survey.php">Survey</a>
					<a href="naturequiz.php">Nature-Quiz</a>
					<a href="culturequiz.php">Culture-Quiz</a>
					<a href="sciencequiz.php">Science-Quiz</a>
                    <a href="trivia.php">Trivia</a>
                    <a href="stats.php">Stats</a>


				</center>
			</p>
			<p><center>Ahmed B. Qureshi &copy;2017</center></p>
		</footer>
	</body>
	</php>