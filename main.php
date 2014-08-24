<?php
include 'include/auth.php';
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
            <img id="logo" src="./images/cooltext1684135702.png" alt="logo"/>
            <input type="search" placeholder="Search">
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
                <ul>
                    <li>Popular Posts</li>
                    <li>Second</li>
                    <li>Third</li>
                    <li>Fourth</li>
                    <li>Ipsum</li>
                </ul>
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
mysql_set_charset('utf8');
include 'class/Select.class.php';
include 'class/Insert.class.php';

$select = new Select();
$insert = new Insert();

if ( $_GET['p'] == 1 ) 	{ include 'article.php'; }
if ( $_GET['p'] == 2 ) 	{ include 'view.php'; }
if ( $_GET['p'] == '' ) { include 'posts.php'; }

?>
        </div>
        <footer>
            Copyright © 2014
        </footer>
    </div>
</body>
</html>