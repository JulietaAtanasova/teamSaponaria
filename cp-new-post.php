<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Bubble Blog - New Post</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="css/article-generator.css" type="text/css"/>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/articleGenerator.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="body">
<div class="wrapper">
<?php
require('cp-header.html');
?>

<div class="mainContent">
    <div class="content">
        <article class="topcontent">
            <header>
                <h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Add New Post</a></h2>
            </header>

        </article>
        <?php
        include('article-generator.html');
        ?>

    </div>

    <div class = "sidebars">
        <aside class="top-sidebar">
            <article>
                <h3>Tags</h3>
                <p><input type="text" name="tgs" id="addTag" placeholder="Add A Tag" /></p>
                <p></p>
            </article>
        </aside>
        <aside class="middle-sidebar">
            <article>
                <h3>Categories</h3>
                <p><input type="text" name="cats" id="addCategory" placeholder="Add Another Category" /></p>
                <ul>
                    <li><input type="checkbox">First Category</li>
                    <li><input type="checkbox">Second Category</li>
                    <li><input type="checkbox">Third Category</li>
                    <li><input type="checkbox">Fourth Category</li>
                </ul>
            </article>
        </aside>
    </div>
</div>
<?php
include('cp-footer.html');
?>
</div>
</body>
</html>