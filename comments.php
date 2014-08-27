<?php
	mysql_set_charset('utf8');
	
if (isset($_GET['postId'])) {
	include('html/commentForm.html');
	$postId = $_GET['postId'];
	$result = $select->getComments($postId);
	while ($row = mysql_fetch_array($result)) {
		?>
		<section class="comment">
			<h4 class="commentTitle"><?= $row['comment_name']; ?></h4>
			<em><span class="commentInfo">Posted by <strong><span class="commentAuthor"><?= $row['comment_author']; ?></span></strong> on <time><?= $row['comment_date']; ?></time></span></em>
			<p class="commentContent"><?= $row['comment_text']; ?></p>
		</section>
		<?php
	}
}

?>