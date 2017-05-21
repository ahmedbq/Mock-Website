<?php session_start();
	include_once ("timeout.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to the Quiz Website!</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <center><a href="index.php"><img src="Quizzer.png" title="Quizzer Logo" alt="The logo for the Quizzer website."></a></center>
        <img src="mickeyPeeking.png" title="Mickey Mouse" alt="Mickey Mouse peeking ontop of the logo" id="mickeyMouse">
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
        <li><a href="relatedlinks.php">Related</a></li>
        <li><a href="trivia.php">Trivia</a></li>
        <li><a href="stats.php">Stats</a></li>
		<?php if(isset($_SESSION['logged_in']))
			{echo "<li><a href='UserStatistics.php'>User Statistics</a></li>"; }
			?>
    </ul>

    <h1>Trivia Page</h1>



    <!--Question and Answer Image-->
    <center>

    <!--Answer-->
    <div id="ans"></div>
    <br><br>

    <img id="Q1" class="QuestionImage" src="QuestionMark.jpg" alt="Trivia Question Logo"  onmouseover="loadDocAnsQ1();">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <img id="A1" class="QuestionImage" src="ExclamationMark.jpg" alt="Trivia Answer Logo"  onmouseover="loadDocAnsA1();">
    <br><br>

    <img class="QuestionImage" src="QuestionMark.jpg" alt="Trivia Question Logo" id="Q2" onmouseover="loadDocAnsQ2();">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <img class="QuestionImage" src="ExclamationMark.jpg" alt="Trivia Answer Logo" id="A2" onmouseover="loadDocAnsA2();">
    <br><br>

    <img class="QuestionImage" src="QuestionMark.jpg" alt="Trivia Question Logo" id="Q3" onmouseover="loadDocAnsQ3();">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <img class="QuestionImage" src="ExclamationMark.jpg" alt="Trivia Answer Logo" id="A3" onmouseover="loadDocAnsA3();">
    <br><br>

    <img class="QuestionImage" src="QuestionMark.jpg" alt="Trivia Question Logo" id="Q4" onmouseover="loadDocAnsQ4();">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <img class="QuestionImage" src="ExclamationMark.jpg" alt="Trivia Answer Logo" id="A4" onmouseover="loadDocAnsA4();">
    <br><br>

    
    </center>



    <!-- Footer -->
    <footer class="footer">
        <p>
		<?php if(isset($_SESSION['logged_in']))
			{echo "<p><h3><a href='logout.php'>Logout</a><h3></p>"; }
			?>
            <center>
                <a href="index.php">Home</a>
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