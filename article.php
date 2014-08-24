<?php

$title 		= ( isset( $_POST['title'] ) ) 		? $_POST['title'] 		: '';
$article 	= ( isset( $_POST['article'] ) ) 	? $_POST['article'] 	: '';

if ( isset( $_POST['newArticle'] ) && $_POST['newArticle'] == 'Post') {

	$errors = array();
    if (empty($title)) {$errors[] = 'Title is required.';}
    if (empty($article)) {$errors[] = 'Text is required.';}
	
    if (count($errors) > 0) {
        echo '<p><strong style="color:#FFFFFF;">Error!</strong></p>';
        echo '<p>We have found the following errors:</p>';
        echo '<ul>';
        foreach ($errors as $error) {echo '<li>' . $error . '</li>';}
        echo '</ul>';
		die ('</center></body></html>');
    } else {
	
		$insert->action(2);
		$insert->post($title, $article);
		

		include 'view.php';
		die('
					</div>
					<footer>
						Copyright © 2014
					</footer>
				</div>
			</body>
			</html>
		');
	}
}

if ( isset( $_SESSION['user_id'] ) ) {  // Проверяваме дали потребителя се е вписал.
?>
<form action="main.php?p=1" method="post">
	<label for="title">Title:</label>
	<input type="text" id="title" class="title" name="title" placeholder="Title.."/>
	<div class="toolbar">
		<input type="button" class="bold" value="B" onclick="modifyText('bold')"/>
		<input type="button" class="italic" value="I" onclick="modifyText('italic')"/>
		<input type="button" class="underline" value="U" onclick="modifyText('underline')"/>
		<select id="heading" onChange="modifyText('heading')">
			<option value="" selected>-</option>
			<option value="h1">h1</option>
			<option value="h2">h2</option>
			<option value="h3">h3</option>
			<option value="h4">h4</option>
			<option value="h5">h5</option>
		</select>
		<select id="fontFamily" onChange="modifyText('fontFamily')">
			<option value="Calibri" selected>Calibri</option>
			<option value="Arial">Arial</option>
			<option value="Verdana">Verdana</option>
			<option value="Helvetica">Helvetica</option>
			<option value="Georgia">Georgia</option>
			<option value="sans-serif">sans-serif</option>
		</select>
		<select id="fontSize" onChange="modifyText('fontSize')">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3" selected>3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
		</select>
		<input type="button" id="link" onclick="modifyText('link')"/>
		<input type="button" id="unlink" onclick="modifyText('unlink')"/>
		<input type="button" id="image" onclick="modifyText('image')"/>
	</div>
	<div contenteditable="true" id="textfield"></div>
	<textarea id="article" hidden="" name="article"></textarea>
	<input type="submit" name="newArticle" value="Post" onclick="saveChanges()"/>
</form>
<?php 
} else {

	echo 'За да публикувате статии е необходимо да се впишете!';

}