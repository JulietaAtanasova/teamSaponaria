<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Bubble Blog - Categories</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/app.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="body">
<div class="wrapper">
<?php
require('cp-header.html');
?>

<div class="mainContent">
    <div class="column">
        <article>
            <header>
                <h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Add New Category</a></h2>
            </header>
            <div>
                <label for="addNewCategory">Name</label><br/>
                <input type="text" name="addNewCategory" id="addNewCategory"/><br/>
                <label for="categoryDescription">Description</label><br/>
                <textarea name="categoryDescription" id="categoryDescription"></textarea>
            </div>
        </article>
    </div>

    <div class = "column">
        <article>
            <header>
                <h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Existing Categories</a></h2>
            </header>
            <div>
                <input type="button" name="deleteCategory" value="Delete Category"/>
                <ul>
                    <li><input type="checkbox">First Category</li>
                    <li><input type="checkbox">Second Category</li>
                    <li><input type="checkbox">Third Category</li>
                    <li><input type="checkbox">Fourth Category</li>
                    <li><input type="checkbox">Fifth Category</li>
                </ul>
            </div>
        </article>
    </div>
</div>
<?php
include('cp-footer.html');
?>
</div>
</body>
</html>