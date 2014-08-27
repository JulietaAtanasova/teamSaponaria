<?php mysql_set_charset('utf8');
include 'include/auth.php';
include 'class/Select.class.php';
include 'class/Insert.class.php';

$select = new Select();
$insert = new Insert();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Bubble Blog</title>
<link href="css/posts.css" rel="stylesheet"/>
</head>
<body>
<div id="wrapper">
<?php 
?>
    <section class="header"><?php include('html/header.html'); ?></section>
    <section class="content">
<?php
include('html/aside.html');
?>
<section class="main"> 
<?php
	include 'allPosts.php';
?> </section>
</section>
<?php include('html/footer.html'); ?>
</div>
</body>
</html>
</html>
