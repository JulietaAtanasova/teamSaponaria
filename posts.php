<?php 

$result 	= $select->lastArticles(10);
while ($row = mysql_fetch_array($result)) {

?>
<h1><a href="?p=2&post=<?=$row['post_id']?>"><?=$row['post_name']?></a></h1>
<p>Posted by <?=$row['first_name']?> <?=$row['last_name']?> on <?=$row['post_date']?></p>
<br />
<?php 

}

?>