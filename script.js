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
	alert("Login successful!");
	//this.document.cookie = document.getElementById("email").innerHTML;
	this.localStorage.setItem("firstname", document.getElementById("FName").value);
	alert("Welcome " + this.localStorage.getItem("firstname"));
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

	/*initializes it only if it is null*/
	if(isNaN(nowANumber))
	{
		localStorage.setItem("correct", "0");
	}
	nowANumber = parseInt(this.localStorage.getItem("correct"));
	nowANumber++;
	this.localStorage.setItem("correct",nowANumber+"");
	document.getElementById("right").innerHTML = this.localStorage.getItem("correct");

	alert("Correct!");
}

function incorrect() {
	var nowANumber = parseInt(this.localStorage.getItem("incorrect"));

	if(isNaN(nowANumber))
	{
		localStorage.setItem("incorrect", "0");
	}
	nowANumber = parseInt(this.localStorage.getItem("incorrect"));
	nowANumber++;
	this.localStorage.setItem("incorrect",nowANumber+"");
	document.getElementById("wrong").innerHTML = this.localStorage.getItem("incorrect");

	alert("Not Correct!");
}

function keepCountUpdated() {
	document.getElementById("txt").value = c;

	document.getElementById("txt").value = parseInt(this.localStorage.getItem("c", c+"" ));

	document.getElementById("right").innerHTML = this.localStorage.getItem("correct");
	document.getElementById("wrong").innerHTML = this.localStorage.getItem("incorrect");
}
