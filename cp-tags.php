<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Bubble Blog - Tags</title>
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
                <h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Add New Tag</a></h2>
            </header>
            <div>
                <label for="addNewTag">Name</label><br/>
                <input type="text" name="addNewTag" id="addNewTag"/><br/>
                <label for="tagDescription">Description</label><br/>
                <textarea name="tagDescription" id="tagDescription"></textarea>
            </div>
        </article>
    </div>

    <div class = "column">
        <article>
            <header>
                <h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Existing Tags</a></h2>
            </header>
            <div>
                <input type="button" name="deleteTag" value="Delete Tag"/>
                <ul>
                    <li><input type="checkbox">First Tag</li>
                    <li><input type="checkbox">Second Tag</li>
                    <li><input type="checkbox">Third Tag</li>
                    <li><input type="checkbox">Fourth Tag</li>
                    <li><input type="checkbox">Fifth Tag</li>
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