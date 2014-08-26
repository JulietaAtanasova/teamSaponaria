<?php
include 'include/auth.php';
include 'include/db.php';
include 'class/Insert.class.php';
include 'class/Select.class.php';

if (!class_exists('Select'))  $select = new Select(); 
if (!class_exists('Insert'))  $insert = new Insert(); 
mysql_set_charset('utf8');
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Bubble Blog</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/article-generator.css"/>
    <script src="js/articleGenerator.js"></script>
</head>
<body>
    <div id="wrapper">
        <?php include('html/header.html');
        include('html/aside.html'); ?>
        <div id="main">
<?php
	include 'allPosts.php';
?>
        </div>
        <?php include('html/footer.html'); ?>
    </div>
</body>
</html>