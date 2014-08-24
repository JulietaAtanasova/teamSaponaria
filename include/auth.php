<?php
// start or continue session
session_start();

if (!isset($_SESSION['logged'])) {

    echo '<p style="color:white">The user has not signed in. Here we should put Sign up form. The file is include/auth.php</p>';

}

include 'include/db.php';
$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or die ('Unable to connect. Check your connection parameters.');
mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));
