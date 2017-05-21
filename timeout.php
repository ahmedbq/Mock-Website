<?php
session_start();

if((isset($_SESSION['logged_in'])))
{
 
$timeout = 1 * 60; 
$timeout = filter_var($timeout, FILTER_SANITIZE_NUMBER_INT);

if(isset($_SESSION['timeout'])) {
    $duration = time() - (int)$_SESSION['timeout'];
    if($duration > $timeout) {
		echo "<script type='text/javascript'>alert('Session Timeout!');
		window.location.href = 'login.php';
		</script>";
        session_destroy();
        session_start();
    }
}
$_SESSION['timeout'] = time();
}

?>
