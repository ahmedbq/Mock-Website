<?php session_start();
	include_once ("timeout.php");?>

	<!DOCTYPE html>
	<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Survey</title>
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
				<h2>Survey</h2>
				<h3>What do you think of us?</h3>
			</center>
		</p>

		<!--Login Form-->
		<center><form action="index.php" id="SurveyForm">
			<textarea name="message" rows="10" cols="30" placeholder="I love your quizzes!" autofocus></textarea>
			<br>
			<label for="tel" name="tel" placeholder = "(xxx) xxx-xxxx">Telephone (Optional) </label>
			<br>
			<input type = "tel" name = "tel" placeholder = "(xxx) xxx-xxxx">
			<br>
			<input type = "submit" value = "Submit">
			<input type="button" onclick="ResetDialog('SurveyForm')" value="Reset form">

		</form></center>

		<center><div id = "disclaimer">
			<strong>DISCLAIMER</strong>
			This is a general reminder that we are not
			responsible for individuals who use our
			website and plan to drive an automobile at
			the same time. We are not liable for anything.
		</div></center>

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