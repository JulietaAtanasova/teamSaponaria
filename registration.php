<?php

include 'include/db.php';
include 'class/Insert.class.php';

$insert = new Insert();

$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or die ('Unable to connect. Check your connection parameters.');
mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));

$first_name 	= ( isset( $_POST['first_name'] ) ) 	? trim($_POST['first_name']) 	: '';
$last_name 		= ( isset( $_POST['last_name'] ) ) 		? trim($_POST['last_name']) 	: '';
$username 		= ( isset( $_POST['username'] ) ) 		? trim($_POST['username']) 		: '';
$email 			= ( isset( $_POST['email'] ) ) 			? trim($_POST['email']) 		: '';
$password 		= ( isset($_POST['password'] ) ) 		? trim($_POST['password']) 		: '';
$cpassword 		= ( isset($_POST['cpassword'] ) ) 		? trim($_POST['cpassword'])		: '';


if (isset($_POST['signUp']) && $_POST['signUp'] == "Sign Up") {

    $errors = array();
    if (empty($username)) {$errors[] = 'Username is required.';}
    if (empty($email)) {$errors[] = 'E-mail is required.';}
    if (empty($password)) {$errors[] = 'Password is required.';}
    if (empty($cpassword)) {$errors[] = 'Confirm password is required.';}
    if ($password != $cpassword) {$errors[] = 'Passwords do not match.';}
	
    if (count($errors) > 0) {
        echo '<p><strong style="color:#FFFFFF;">Error!</strong></p>';
        echo '<p>We have found the following errors:</p>';
        echo '<ul>';
        foreach ($errors as $error) {echo '<li>' . $error . '</li>';}
        echo '</ul>';
		die ('</center></body></html>');
    } else {
		
		$insert->action(5);
		$insert->user($first_name, $last_name, $username, $password, $email);

		echo 'Успешна регистрация! Можете да влезете в профила си от <a href="index.php">тук</a>.<br /> ТУК МОЖЕ ДА ПОМИСЛИТЕ КАК ДА ИЗЛИЗА!';
		die();
	}
}
?>
<!DOCTYPE html>

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
   <!--button>Log In</button-->
    <form id="sign-up" action="index.php" method="post">
        <input type="submit" value="Log In"/>
    </form>
    <div id="container">
        <img src="./images/cooltext1684135702.png" alt="logo"/>
        <div id="bg">
            <form action="#" method="post">
                <input type="text" name="first_name" placeholder="First name" />
                <input type="text" name="last_name" placeholder="Last name" />
                <input type="text" name="username" placeholder="Username" />
                <input type="text" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <input type="password" name="cpassword" placeholder="Password" />
                <input type="submit" name="signUp" value="Sign Up" />
            </form>
        </div>
    </div>
</body>
</html>