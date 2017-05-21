<?php
if(isset($_POST["email"]))
{
	
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  echo $emailErr;
}

}
?>