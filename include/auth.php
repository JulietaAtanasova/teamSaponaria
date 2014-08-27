<?php
// start or continue session
session_start();

if (!isset($_SESSION['logged'])) {
	?><body onload="timer=setTimeout(function(){ window.location='index.php';}, 1000)"><?php
    die('Login!');

}

include 'include/db.php';
$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or die ('Unable to connect. Check your connection parameters.');
mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));
