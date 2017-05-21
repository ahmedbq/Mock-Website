<?php
	session_start();
    require_once 'insert.php';
	include_once ("timeout.php");
	include_once ("email.php");

?>

	<!DOCTYPE html>
	<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title>Sign Up</title>
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


		<center><p>
			<h2>Sign Up</h2>
		</p>

		<!--Signup Form-->
		<form id="SignupForm" name="signup" action="insert.php" method="post">

            <input id="userName" type="text" name="userName" placeholder="Username" size=40px value="<?php echo $_SESSION['userNameSIGNUP']; ?>" required autofocus >
            <br>
			<!--<label for="First Name" name="firstName" placeholder="First Name">First Name: </label>-->
			<input id="FName" type="text" name="firstName" placeholder="First name" size = 40px value="<?php echo $_SESSION['firstNameSIGNUP']; ?>" required autofocus>
			<br>
			<!--<label for="Last Name" name="lastName" placeholder="Last Name">Last Name: </label>-->
			<input id="LName" type="text" name="lastName" placeholder="Last name" size = 40px value="<?php echo $_SESSION['lastNameSIGNUP']; ?>" required>
			<br>
			<!--<label for="useremail">Email: </label>-->
			<input type="email" name="email" placeholder="Example@email.com" onkeyup="localStorage.setItem('firstname', document.getElementById('email').innerphp);" value="<?php echo $_SESSION['emailSIGNUP']; ?>" autofocus required id = "email" size = 40px>
			<br>
			<!--<label for="password1" name="password1" placeholder="password">Password: </label>-->
			<input id="password1" type="password" name="password1" placeholder="Password" onkeyup="checkPass();" value="<?php echo $_SESSION['password1SIGNUP']; ?>" required size = 40px>
			<br>
			<!--<label for="password2" name="password2" placeholder="password2">Retype Password: </label>-->
			<input id="password2" type="password" name="password2" placeholder="Retype your password" onkeyup="checkPass();" value="<?php echo $_SESSION['password1SIGNUP']; ?>" required size = 40px>
			<br>
            <input type="tel" name="usrtel" placeholder="555-555-5555 (Optional)" value="<?php echo $_SESSION['usrtelSIGNUP']; ?>" size="40px">
            <br>
			<input type="submit" id = "submit" name="submit" onclick = "LoginSuccessful();">
			<input type="button" onclick="<?php $_SESSION['userNameSIGNUP'] = ""; $_SESSION['firstNameSIGNUP'] = ""; $_SESSION['lastNameSIGNUP'] = ""; $_SESSION['emailSIGNUP'] = ""; $_SESSION['usrtelSIGNUP'] = ""; $_SESSION['password1SIGNUP'] = "";?> ResetDialog('SignupForm'); " value="Reset form">
			<center><p id="match"></p></center>
			<p id="conditions">The password must be between 6 and 20 characters, contain one or more upper case letters, one or more lower case letters, a number and a special character. It can not contain any white space.</p>

		</form>
	</center>

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