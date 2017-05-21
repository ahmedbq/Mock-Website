<?php
session_start();

echo"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js'></script>";


$_SESSION['QuizCorrect'] = $_POST['QuizCorrect'];
$_SESSION['QuizWrong'] = $_POST['QuizWrong'];

?>