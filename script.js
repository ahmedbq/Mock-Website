var Chicken = "Why did the chicken cross the road? "; //To get to the other side
var BobTheBuilder = "Who can fix anything? "; //Bob the Builder
var Siblings = "You have 3 siblings named 'Bob', 'Marley' and 'Joe'. Who is the 4th sibling? "; //You
var Trapped = "You are trapped on all sides by a wall and all you have is a mirror and a table. How do you escape? "; 
//You look into the mirror and you see what you saw, you take the saw and cut the table in half, two halves make a whole. 
//You climb out of the hole.
//document.cookie;

function Random()
{
	var myArray= new Array(this.Chicken, this.BobTheBuilder, this.Siblings, this.Trapped);
	var random = myArray[Math.floor(Math.random() * myArray.length)];
	document.getElementById("randomQuiz").innerHTML=random;
}

function displayAnswer()
{
	if (document.getElementById("randomQuiz").innerHTML === this.Chicken)
	{
		document.getElementById("answer").innerHTML = "To get to the other side.";
	}
	else if (document.getElementById("randomQuiz").innerHTML === this.BobTheBuilder)
	{
		document.getElementById("answer").innerHTML = "Bob the Builder.";
	}
	else if (document.getElementById("randomQuiz").innerHTML === this.Siblings)
	{
		document.getElementById("answer").innerHTML = "You.";
	}
	else if (document.getElementById("randomQuiz").innerHTML === this.Trapped)
	{
		document.getElementById("answer").innerHTML = "You look into the mirror and you see what you saw, you take the saw and cut the table in half, two halves make a whole. You climb out of the hole.";
	}
}

function ResetDialog(id) {
	var click  = confirm("Confirm Reset");
	if (click === true)
	{
		document.getElementById(id).reset();
		location.reload();
	}
}

/*Checks if both passwords entered are the same*/
function checkPass()
{

	var pass1 = document.getElementById('password1');
	var pass2 = document.getElementById('password2');

	var message = document.getElementById('confirmMessage');

	var goodColor = "#66cc66";
	var badColor = "#ff6666";

	if(pass1.value === pass2.value){
	    document.getElementById("match").innerHTML = "Passwords match!";

		if (regex()){
			document.getElementById("submit").disabled = false;
		}
		pass2.style.backgroundColor = goodColor;
	}else{
	    document.getElementById("match").innerHTML = "Passwords must match!";

		document.getElementById("submit").disabled = true;

		pass2.style.backgroundColor = badColor;
	}
}  

/*Contraints on password*/
function regex()
{
	var conditions = /^(?=.*?[a-z])(?=.*?[A-Z])(?=.*[!@#\$%\^&\*])(?=.*[0-9]).{6,20}$/;
	/*Checks for the conditions*/
	var whitespace = /^\S*$/;
	/*Checks for whitespace characters*/

	// var regex = new RegExp(conditions, 'g');

	const regex = conditions;
	const regex2 = whitespace;
	let m;
	var checkThis = document.getElementById("password1").value;
	if ((m = regex.exec(checkThis)) !== null && (m = regex2.exec(checkThis)) !== null) {
    // The result can be accessed through the `m`-variable.
    m.forEach((match, groupIndex) => {
        console.log("found it");
        document.getElementById("submit").disabled = false;
        // console.log(`Found match, group ${groupIndex}: ${match}`);
        document.getElementById("conditions").style.color = "black";

      });
	}
	else {
		document.getElementById("conditions").style.color = "red";
	}

// var checkThis = document.getElementById("password1").value;
// console.log("before regex if statement");
// if (regex.test(checkThis))
// {
// 	document.getElementById("conditions").innerHTML.color = "red";
// 	return true; 
// }
// else 
// {
// 	document.getElementById("conditions").innerHTML.color = "red"; 
// 	return false;
// }
}
//https://www.thepolyglotdeveloper.com/2015/05/use-regex-to-test-password-strength-in-javascript/

function LoginSuccessful ()
{
	//alert("Login successful!");
	//this.document.cookie = document.getElementById("email").innerHTML;
	this.localStorage.setItem("firstname", document.getElementById("FName").value);
	//alert("Welcome " + this.localStorage.getItem("firstname"));
}

function changeWelcome ()
{
	//document.getElementById("Welcome").innerHTML = "Welcome " + this.document.cookie + "!";
	if(this.localStorage.getItem("firstname") !== null)
	{
		document.getElementById("Welcome").innerHTML = "Welcome " + this.localStorage.getItem("firstname") + "!";
	}
}

/*Stopwatch*/

var c = 0;
var t;
var timer_is_on = 0;

function timedCount() {

	if (isNaN(this.localStorage.getItem("c")))
	{
		this.localStorage.setItem("c", "0");
	}
	else
	{
		c = parseInt(this.localStorage.getItem("c"));
	}

	document.getElementById("txt").value = c;
	c = c + 1;
	this.localStorage.setItem("c", c+"" );
	t = setTimeout(function () { timedCount(); }, 1000);
}

function startCount() {
	if (!timer_is_on) {
		timer_is_on = 1;
		timedCount();
	}
	else {
		clearTimeout(t);
		timer_is_on = 0;
	}
}

function stopCount() {
	clearTimeout(t);
	timer_is_on = 0;
}

function resetAll() {
	c = 0;
	t = 0;
	document.getElementById("txt").value = c;

	this.localStorage.setItem("c", c+"" );

	this.localStorage.setItem("correct", "0");
	this.localStorage.setItem("incorrect", "0");
	document.getElementById("right").innerHTML = this.localStorage.getItem("correct");
	document.getElementById("wrong").innerHTML = this.localStorage.getItem("incorrect");
}

/*Quiz Correct and Incorrect*/
/*Remember that local storage */
function correct() {
	var nowANumber = parseInt(this.localStorage.getItem("correct"));
	var quizANumber = parseInt(this.localStorage.getItem("QuizCorrect"));
	
	if(isNaN(quizANumber))
	{
		localStorage.setItem("QuizCorrect", "0");
	}

	/*initializes it only if it is null*/
	if(isNaN(nowANumber))
	{
		localStorage.setItem("correct", "0");
	}
	nowANumber = parseInt(this.localStorage.getItem("correct"));
	nowANumber++;
	this.localStorage.setItem("correct",nowANumber+"");
	document.getElementById("right").innerHTML = this.localStorage.getItem("correct");
	
	quizANumber++;
	this.localStorage.setItem("QuizCorrect",quizANumber+"");
	
	var tempCor = parseInt(this.localStorage.getItem("QuizCorrect"));
	
	/*document.write('<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
	$(document).ready(function() {
		$("#driver").click(function(event){
	$.POST("SaveVariables.php", {QuizCorrect:tempCor});
		});
	});
	</scr'+'ipt>');*/
	
	alert("Correct!");
}

function incorrect() {
	var nowANumber = parseInt(this.localStorage.getItem("incorrect"));
	var quizANumber = parseInt(this.localStorage.getItem("QuizWrong"));
	
	if(isNaN(quizANumber))
	{
		localStorage.setItem("QuizWrong", "0");
	}
	
	if(isNaN(nowANumber))
	{
		localStorage.setItem("incorrect", "0");
	}
	nowANumber = parseInt(this.localStorage.getItem("incorrect"));
	nowANumber++;
	this.localStorage.setItem("incorrect",nowANumber+"");
	document.getElementById("wrong").innerHTML = this.localStorage.getItem("incorrect");
	
	quizANumber++;
	this.localStorage.setItem("QuizWrong",quizANumber+"");
	
	var tempWro = parseInt(this.localStorage.getItem("QuizWrong"));
	
	/*document.write('\x3Cscript type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
	$(document).ready(function() {
		$("#driver").click(function(event){
	$.POST("SaveVariables.php", {QuizWrong:tempWro});
	});
	});
	\x3C/script>');*/

	alert("Not Correct!");
}

function database()
{
	document.cookie = "correctCOOKIE=" + parseInt(localStorage.getItem("correct"));
	document.cookie = "incorrectCOOKIE=" + parseInt(localStorage.getItem("incorrect"));
}

function keepCountUpdated() {
	document.getElementById("txt").value = c;

	document.getElementById("txt").value = parseInt(this.localStorage.getItem("c", c+"" ));

	document.getElementById("right").innerHTML = this.localStorage.getItem("correct");
	document.getElementById("wrong").innerHTML = this.localStorage.getItem("incorrect");
}

/*AJAX*/
function loadDocAnsA1() {
    var xhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ans").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", "A1.txt", true);
    xhttp.send();
}

function loadDocAnsA2() {
    var xhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ans").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", "A2.txt", true);
    xhttp.send();
}

function loadDocAnsA3() {
    var xhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ans").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", "A3.txt", true);
    xhttp.send();
}

function loadDocAnsA4() {
    var xhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ans").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", "A4.txt", true);
    xhttp.send();
}

function loadDocAnsQ1() {
    var xhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ans").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", "Q1.txt", true);
    xhttp.send();
}

function loadDocAnsQ2() {
    var xhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ans").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", "Q2.txt", true);
    xhttp.send();
}

function loadDocAnsQ3() {
    var xhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ans").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", "Q3.txt", true);
    xhttp.send();
}

function loadDocAnsQ4() {
    var xhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ans").innerHTML = this.responseText;

        }
    };
    xhttp.open("GET", "Q4.txt", true);
    xhttp.send();
}

function displayXML(xml) {
    var i;
    var xmlDoc = xml.responseXML;
    var table = "";
    var x = xmlDoc.getElementsByTagName("ENTITY");
    var StringInput = document.getElementById("txt1").value;
    for (i = 0; i < x.length; i++) {
        if (x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue == StringInput) { /*will print only if input matches*/
            table += "<tr><th>LEGEND</th></tr>";
            table += "<tr><td><center><img src='" + x[i].getElementsByTagName("PIC")[0].childNodes[0].nodeValue + "' height=300px width=auto/></center></td></tr>";
            table += "<tr><td><center><strong>Name:</strong> " +
            x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
            "</td></tr></center><tr><td><center><strong>Origin:</strong> " +
            x[i].getElementsByTagName("ORIGIN")[0].childNodes[0].nodeValue +
            "</td></tr></center><tr><td><center><strong>Story:</strong><em> " +
            x[i].getElementsByTagName("STORY")[0].childNodes[0].nodeValue +
            "</em></td></tr></center><br><br>";
        }
    }
    document.getElementById("ObjectInfo").innerHTML = table;
}

function loadXML() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                displayXML(this);
            }
        };
        xhttp.open("GET", "objects.xml", true);
        xhttp.send();
    }