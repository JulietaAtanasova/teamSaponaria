<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Bubble Blog - Control Panel</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="css/article-generator.css" type="text/css"/>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/articleGenerator.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="body">
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
                <p><input type="text" name="addTag" placeholder="Add A Tag" /></p>
                <p></p>
            </article>
        </aside>

        <aside class="middle-sidebar">
            <article>
                <h3>Categories</h3>
                <p><input type="text" name="addCategory" placeholder="Add Another Category" /></p>
                <p><ul>
                    <li><input type="checkbox">First Category</li>
                    <li><input type="checkbox">Second Category</li>
                    <li><input type="checkbox">Third Category</li>
                    <li><input type="checkbox">Fourth Category</li>
                </ul></p>
            </article>
        </aside>

        <aside class="bottom-sidebar">
            <article>
                <h3>Other settings</h3>
                <h5>Author: </h5>
                <p><input type="text" name="addAuthor" placeholder="Enter a author"/></p>
                <p><input type="checkbox" name="authorName" checked/>User Name</p>
                <h5>Comments:</h5>
                <p><input type="checkbox" name="allowComments" checked/>Allow Comments</p>
            </article>
        </aside>
    </div>
</div>
<?php
include('cp-footer.html');
?>
</body>
</html>