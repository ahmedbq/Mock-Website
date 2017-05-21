<?php session_start();
		
    include_once ("timeout.php");
?>

	<!DOCTYPE html>
	<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Welcome to the Quiz Website!</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<script src="script.js"></script>
	</head>
	<body onload="Random(); changeWelcome();">
		<header>
			<center><a href = "index.php"><img src = "Quizzer.png" title = "Quizzer Logo" alt = "The logo for the Quizzer website."></a></center>
			<img src="mickeyPeeking.png" title = "Mickey Mouse" alt = "Mickey Mouse peeking ontop of the logo" id = "mickeyMouse">
			<!--INSERT LOGO-->
		</header>

		<!-- Top Navbar-->
		

		
		<ul class="menuList">
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
		


		<!--Table within a table-->
		<table>
			<tr>
				<td><h1 id = "Welcome">Welcome to the Quiz Website!</h1></td>
			</tr>
			<tr>
				<td><h3>
					<p>
						This website will ask you various hard questions to test your probable IQ level.
					</p>
					<p>
						We have a couple of user-friendly quizzes and an option to login to social media
						to flaunt.
					</p>
				</h3></td>
			</tr>
		</table>

		<!--Quiz icons in table-->
		<center><p><h1 class="QuizHeader">
			<table class="Quizzes">
				<th colspan = 3>Choose a topic!</th>
				<tr>
					<td><a href = "naturequiz.php"><img src="nature.png" title = "Nature Quiz Image Button" alt="The Nature Quiz image which takes you to the Nature Quiz when clicked."></a></td>
					<td><a href = "culturequiz.php"><img src="culture.png" title = "Culture Quiz Button" alt="The Culture Quiz image which takes you to the Culture Quiz when clicked."></a></td>
					<td><a href = "sciencequiz.php"><img src="science.png" title = "Science Quiz Button" alt="The Science Quiz image which takes you to the Science Quiz when clicked."></a></td>
				</tr>
			</table>
		</h1></p></center>

		<!-- Random Quiz Generator -->
		<table id = "randomQuizTable">
			<tr>
				<td>
					<p id = "boldRandomQuizTable">Hover over to solve the riddle!</p>
					<p id = "randomQuiz" onmouseover="displayAnswer()"></p>
					<p id = "answer"></p>
				</td>
			</tr>
		</table>

		<h3><ul class ="listStyle">
			<li>
				<div class = "tooltip">Do you want random questions?
					<span class = "tooltiptext">You know you want to.</span>
				</div>
				<ul>
					<li><a href="naturequiz.php#mid">Nature randomizer!</a></li>
					<li><a href="culturequiz.php#mid">Culture randomizer!</a></li>
					<li><a href="sciencequiz.php#mid">Science randomizer!</a></li>
				</ul>
			</ul>
		</h3>
	</li>
	
	



	<!-- Footer -->
	<footer class="footer">
		<p>
		<!-- do not have to declare html for php code in these cases -->
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