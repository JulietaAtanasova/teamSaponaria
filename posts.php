<?php mysql_set_charset('utf8');
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
include 'include/auth.php';
?>
    <section class="header"><?php include('html/header.html'); ?></section>
    <section class="content">
<?php
include('html/aside.html');
?>
<section class="main"> <?php
if (isset($_GET['postId'])) {
	$postId = $_GET['postId'];
	$result = $select->article($postId);
	$row = mysql_fetch_array($result);
	?>
	<h3 class="articleTitle"><?= $row['post_name']; ?></h3>
	<em><p class="postInfo">Posted by <?= $row['first_name'] . ' ' . $row['last_name'];?> on <time><?= $row['post_date']; ?></time></p></em>
	<p class="postContent"><?= $row['post_text']; ?></p>
	<?php 
	include "comments.php";
}
?> </section>
</section>
<?php include('html/footer.html'); ?>
</div>
</body>
</html>
</html>
