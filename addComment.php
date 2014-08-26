<?php
include('html/header.html');
include 'include/auth.php';
mysql_set_charset('utf8');
include 'class/Select.class.php';
include 'class/Insert.class.php';

$select = new Select();
$insert = new Insert();
$title = $_POST['commentTitle'];
$text = $_POST['commentText'];
$postId = $_POST['post_id'];

$insert->comment($title, $text, $postId);
echo "success!";
