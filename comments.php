<?php
	mysql_set_charset('utf8');
	
if (isset($_GET['postId'])) {
	include('html/commentForm.html');
	$postId = $_GET['postId'];
	$result = $select->getComments($postId);
	while ($row = mysql_fetch_array($result)) {
		?>
		<section class="comment">
			<span class="commentInfo">Posted by <span class="commentAuthor"><?= $row['comment_author']; ?></span> on <time><?= $row['comment_date']; ?></time></span>
			<h4 class="commentTitle"><?= $row['comment_name']; ?></h4>
			<p class="commentContent"><?= $row['comment_text']; ?></p>
		</section>
		<?php
	}
}

?>