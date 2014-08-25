<?php
include 'include/auth.php';
mysql_set_charset('utf8');
include 'class/Select.class.php';
include 'class/Insert.class.php';

$select = new Select();
$insert = new Insert();
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
        <header>
            <a href="main.php"><img id="logo" src="./images/cooltext1687891902.png" alt="logo"/></a>
            <input type="search" placeholder="Search">
			<a href="?p=1"><input type="button" value="" class="addArticle" /></a>
        </header>
        <div id="sidebars">
            <aside class="sidebar">
                <ul>
                    <li>Categories</li>
                    <li>First</li>
                    <li>Second</li>
                    <li>Third</li>
                    <li>Fourth</li>
                </ul>
            </aside>
            <aside class="sidebar">
                <h2>Popular posts:</h2>
				<?php include 'popularPosts.php'; ?>
            </aside>
            <aside class="sidebar">
                <ul>
                    <li>Tags</li>
                    <li>First</li>
                    <li>Second</li>
                    <li>Third</li>
                    <li>Fourth</li>
                </ul>
            </aside>
        </div>
        <div id="main">
		
<?php


if ( isset ( $_GET['p'] ) ) {
	if ( $_GET['p'] == 1 ) 	include 'article.php'; 
	if ( $_GET['p'] == 2 ) 	include 'view.php'; 
} else {
	include 'posts.php';
}

?>
        </div>
        <footer>
            Copyright © 2014
        </footer>
    </div>
</body>
</html>