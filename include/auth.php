<?php
// start or continue session
session_start();

if (!isset($_SESSION['logged'])) {
    header('Refresh: 0; URL=index.php');
    echo '<p>�� ��� ������ � ���������. �� ������ ����������� ��� �������� �� ����</p>';
    echo '<p>��� ������ ������� �� �� ��������� �����������,' .
        '<a href="index.php">��������� ���</a>.</p>';
    die();
}

include 'db.php';
$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or die ('Unable to connect. Check your connection parameters.');
mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));
