<?php session_start();
	include_once ("TotalCorrect.php");
	include_once ("timeout.php");
	include_once ("SaveVariables.php");

?>

	<!DOCTYPE html>
	<html lang = "en">
	<head>
		<meta charset = "utf-8">
		<title name = "top">Welcome to the Culture Quiz!</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="script.js"></script>

	</head>
	<body onload="keepCountUpdated()">
		<header>
			<center><img src = "Quizzer.png" title = "Quizzer Logo" alt = "The logo for the Quizzer website."></center>
			<!--INSERT LOGO-->
		</header>
		<!-- Top Navbar-->
		<ul class="menuList" id = "menuListQuiz">
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
				<td><h1>Welcome to the <mark>Culture</mark> Quiz!</h1></td>
			</tr>
		</table>
		
		<script>
		this.localStorage.setItem("QuizCorrect", "0");
		this.localStorage.setItem("QuizWrong", "0");
		</script>
		
		<a href="SaveVariables.php" class="post"></a>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
			var tempCor = parseInt(this.localStorage.getItem("QuizCorrect"));
			var tempWro = parseInt(this.localStorage.getItem("QuizWrong"));
			
            jQuery(document).ready(function($){
                $('submit').click(function(){
                    $.ajax({
                        url: "SaveVariables.php",
                        type: "POST",
                        data: { QuizCorrect: tempCor, QuizWrong: tempWro },
                        success: function(response){
                              //do action  
							  alert('test');
                        },
                        error: function(){
                              // do action
                        }
                    });
                });
            });
        </script>

		<!--Using <p> and centering it since align table is not in php5-->
		<ol class = "listStyle">
			<li><p> Where do people who love "McDonald's" the most live?</p>
				<form action="TotalCorrect.php" method="post">
					<input type="radio" name="" onclick="incorrect();"> Canada<br>
					<input type="radio" name="" onclick="correct();"> United States<br>
				</form>
			</li>
			<li><p> Which common cartoon do kids watch which features a sponge as a main character?</p>
				<form action="TotalCorrect.php" method="post">
					<input type="radio" name="" onclick="incorrect();"> Looney Tunes<br>
					<input type="radio" name="" onclick="correct();"> Spongebob SquarePants<br>
				</form>
			</li>
			<li><p> The Bronze Age started at different areas of the world at different times. Which nation experienced it from 3500 BC to 3001 BC?</p>
				<form action="TotalCorrect.php" method="post">
					<input type="radio" name="" onclick="incorrect();"> China<br>
					<input type="radio" name="" onclick="correct();"> Bohemia<br>
				</form>
			</li> <!--Bohemia-->
			<li><p> Does the U.S. have a universal healthcare plan?</p>
				<form action="TotalCorrect.php" method="post">
					<input type="radio" name="" onclick="incorrect();"> No<br>
					<input type="radio" name="" onclick="correct();"> Yes<br>
				</form>
			</li>
			<li><p> The George Washington Bridge is named after who?</p>
				<form action="TotalCorrect.php" method="post">
					<input type="radio" name="" onclick="incorrect();"> Thomas Jefferson<br>
					<input type="radio" name="" onclick="correct();"> George Washington<br>
				</form>
			</li>
		</ol>
		
		<?php if(isset($_SESSION['logged_in']))
			{echo"
		<form action='TotalCorrect.php' method='post'>
			<input type='submit' name='submit' value='Save' onclick='database();'><br>
			</form>";}
			?>

		<!--Timer and buttons-->
		<br>
		<strong class = "timerTextRight">#Right:</strong> <label id="right"></label> <strong class = "timerTextWrong">#Wrong:</strong> <label id="wrong"></label>
		<br><br>
		<input type="text" id="txt">
		<button onclick="startCount()">Start/Stop</button>
		<!-- <button onclick="stopCount()">Stop count!</button> -->	
		<br><br><button onclick="resetAll();">Reset All</button>
		<br><br>

		<a href = "culturequiz.php#top">Go back up</a>
		<!-- Footer -->
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