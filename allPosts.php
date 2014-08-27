<?php 
$select = new Select();
$result 	= $select->lastArticles(10);
while ($row = mysql_fetch_array($result)) {

?>
<div class="article">
<h1><a href="posts.php?postId=<?=$row['post_id']?>"><?=$row['post_name']?></a></h1>
<p>Posted by <em><?=$row['first_name']?> <?=$row['last_name']?></em> on <time><?=$row['post_date']?></time></p>
</div>

<?php 

}

?>