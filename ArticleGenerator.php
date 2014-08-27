<!--<body onload="timer=setTimeout(function(){ window.location='main.php';}, 3000)">-->
<?php
session_start();
include 'class/Insert.class.php';
include 'class/Select.class.php';

$select = new Select(); 
$insert = new Insert(); 
if ( isset( $_POST['article'] ) && isset($_POST['title'])) {
	
	$title = $_POST['title'];
	$article = $_POST['article'];
	$tags = preg_split("/[\,\s]+/", $_POST['tags'], -1, PREG_SPLIT_NO_EMPTY);
	$category = $_POST['categories'];
	
	$insert->action(2);
	$insert->post($title, $article, $tags, $category);
	$postId = $select->lastPost()['post_id'];
	$allTags = $select->allTags();
	foreach ($tags as $tag_name) {
		$insert->tag($tag_name);
	}
	
	echo "Article successfully posted!";
}
	