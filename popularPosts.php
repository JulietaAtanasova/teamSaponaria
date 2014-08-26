<?php 

$popularPosts = $select->lastArticles(5);
?> <ul> <?php
while ($row = mysql_fetch_array($popularPosts)) 
{
?>
<li><a href="?p=2&post=<?=$row['post_id']?>"><?=$row['post_name']?></a></li>
<?php 
}
?>
</ul> 