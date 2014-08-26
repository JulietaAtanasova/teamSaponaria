<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Bubble Blog - Comments</title>
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
        <article class="comments">
            <header>
                <h2><a href="#" rel="bookmark" title="Permalink to this POST TITLE">Comments</a></h2>
            </header>
            <div>
                <table class="table">
                    <thead>
                        <th><label for="selectAllComments"></label>
                            <input id="selectAllComments" name="selectAllComments" type="checkbox"></th>
                        <th>Author</th>
                        <th>Comment</th>
                        <th>In Response To</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </article>
    </div>
<?php
include('cp-footer.html');
?>
</div>
</body>
</html>