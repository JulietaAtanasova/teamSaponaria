<?php
session_start();
include 'include/db.php';
include 'class/Insert.class.php';
mysql_set_charset('utf8');
$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or 
    die ('Unable to connect. Check your connection parameters.');
mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));

$username = (isset($_POST['username'])) ? trim($_POST['username']) : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

if (isset($_POST['submit'])) {

    $query = 
		'SELECT user_id, user_type_id ' .
		'FROM user  ' .
		'WHERE ' .
         'username = "' . mysql_real_escape_string($username, $db) . '" AND ' .
         'password = "' . mysql_real_escape_string($password, $db) . '"';
    $result = mysql_query($query, $db) or die(mysql_error($db));

    if (mysql_num_rows($result) > 0) {
		session_unset();
		
		$query = "SELECT * FROM user WHERE username = '" . mysql_real_escape_string($username, $db) . "'";
		$result = mysql_query($query, $db) or die(mysql_error($db));
		
		$row = mysql_fetch_assoc($result);
		$_SESSION['logged'] = 1;
		$_SESSION['user_type_id'] = 2;
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['first_name'] = $row['first_name'];
		$_SESSION['last_name'] = $row['last_name'];
		
		$insert = new Insert();
		$insert->action(1);
		
		header('Refresh: 0; URL=main.php?p=1');
		echo '<p>Успешна регистрация!</p>';
		echo '<p>Ако Вашият броузър не ви прехвърли автоматично, моля ' .
			'<a href="main.php?p=1">натиснете тук</a>.</p>';
		mysql_free_result($result);
		mysql_close($db);
		die();

	} else {
		die('WRONG!');
	}
}
?>
﻿<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Bubble Blog</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <form id="sign-up" action="registration.php" method="post">
        <input type="submit" value="Sign Up"/>
    </form>
	<!--a href="registration.php" style="font-size:20px; color:white;">Sign Up!</a-->
    <div id="container">
        <img src="./images/cooltext1684135702.png" alt="logo"/>
        <div id="bg">
            <form action="#" method="post">
                <input type="text" name="username" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <input type="submit" name="submit" value="Log In" />
            </form>
        </div>
    </div>
</body>
</html>