<?php 

if ( isset( $_GET['post'] ) ) {

	$_SESSION['lastPost'] = $_GET['post'];

} else if ( $_SESSION['logged'] == 1 ) {

	$result = $select->lastPost();
	$row = mysql_fetch_assoc($result);
	$_SESSION['lastPost'] = $row['post_id'];
	
} else {

	die('No post difined!');

}

$result 	= $select->article($_SESSION['lastPost']);
$row 		= mysql_fetch_assoc($result);

?>
<h1><?=$row['post_name']?></h1>
<p>Posted by <?=$row['first_name']?> <?=$row['last_name']?> on <?=$row['post_date']?></p>
<br />
<p><?=$row['post_text']?></p>