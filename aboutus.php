<?php session_start();
	    include_once ("timeout.php");
?>

	<!DOCTYPE html	>
	<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Welcome to the Quiz Website!</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<center><a href = "index.php"><img src = "Quizzer.png" title = "Quizzer Logo" alt = "The logo for the Quizzer website."></a></center>
			<!--INSERT LOGO-->
		</header>

		<!-- Top Navbar-->
		<ul class="menuList" id = "menuListOthers">
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


		<!-- Heading -->
		<p><h1><strong><center>About Us.</center></strong> </h1></p>

		<!-- Fixed amount of columns -->
		<div id = "FourColumns"><p><h2>As a nonprofit organization, <em>Quizzer</em> not only hosts
			questions to the general public but also absorbs revenue from
			low-cost advertisements. We use those advertisements to invest
			in worldwide philanthropy such as ending the Malaria Pandemic 
			or providing clean air technology in industrial localities. On
			a global scale, this small website helps reforest parts of 
			South Africa and parts of Venezuela. We are a proud sponsor for
			the Bill Gates Foundation and have helped world-wide leaders
			work on the cure for many types of cancer and auto-immune diseases.
		</h2></p>
	</div>

	<!-- Footer -->
	<footer class="footer" id="AboutUsFooterFix">
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