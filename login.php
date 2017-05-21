<?php 
	session_start();
    require_once 'loginPHPcode.php';
	include_once ("timeout.php");

?>

	<!DOCTYPE html>
	<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<script src="script.js"></script>

	</head>
	<body>
		<header>
			<center><img src = "Quizzer.png" title = "Quizzer Logo" alt = "The logo for the Quizzer website."></center>
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


		<p>
			<h2>Login</h2>
		</p>

		<!--Login Form-->
		<form id="LoginForm" name="login" action="loginPHPcode.php" method="post">
			<label for="username">Username: </label>
			<input type="text" name="userName" placeholder="username" value="<?php echo $_SESSION['userNameHold']; ?>" autofocus required>

			<label for="password">Password: </label>
			<input type="password" name="password1" placeholder="password" required>

			<input type="submit" name="submit" value="Login">
			<input type="button" onclick="<?php $_SESSION['userNameHold'] = ""; ?> ResetDialog('LoginForm'); " value="Reset form">
		</form>

		<footer class="footer" id="footerFix">
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