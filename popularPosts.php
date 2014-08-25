<?php 

$popularPosts = $select->lastArticles(5);
?> <ul> <?php
while ($row = mysql_fetch_array($popularPosts)) 
{
?>
<li><a href="#"><?= $row['post_name'] ?></a></li>
<?php 
}
?>
</ul> 