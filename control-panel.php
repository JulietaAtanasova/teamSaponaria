<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Bubble Blog - Control Panel</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/app.js"></script>
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
                <h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">First Article</a></h2>
            </header>

            <footer>
                <p class="post-info">Posted on the 2nd of July 2014 by Annonymous</p>
            </footer>

            <content>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
            </content>

        </article>

        <article class="bottomcontent">
            <header>
                <h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">First Post</a></h2>
            </header>

            <footer>
                <p class="post-info">Posted on the 5th of July 2014 by Annonymous</p>
            </footer>

            <content>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </content>

        </article>
    </div>
    <div class = "sidebars">
        <aside class="top-sidebar">
            <article>
                <h3>Tags</h3>
                <p><input type="text" name="addTag" placeholder="Add A Tag" /></p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
                <p><input type="text" name="addAuthor" placeholder="Enter a author" /></p>
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