<?php
// start or continue session
session_start();

if (!isset($_SESSION['logged'])) {
    header('Refresh: 0; URL=index.php');
    echo '<p>Не сте влезли в системата. Ще бъдете пренасочени към страница за вход</p>';
    echo '<p>Ако Вашият броузър не ви пренасочи автоматично,' .
        '<a href="index.php">натиснете тук</a>.</p>';
    die();
}

include 'db.php';
$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or die ('Unable to connect. Check your connection parameters.');
mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));
