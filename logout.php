<?php 
session_start();
unset($_SESSION['logged']);
unset($_SESSION['user_type_id']);
unset($_SESSION['user_id']);
unset($_SESSION['email']);
unset($_SESSION['first_name']);
unset($_SESSION['last_name']);
unset($_SESSION['username']);
?><body onload="timer=setTimeout(function(){ window.location='index.php';}, 1000)">