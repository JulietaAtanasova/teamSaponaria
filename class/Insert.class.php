<?php
include 'include/db.php';

class Insert {

	// Универсална функция за вмъкване на редове в базата данни. 
	function mysqlInsert($table, $inserts) {  
	
		$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or die ('Unable to connect. Check your connection parameters.');
		mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));

		$values = array_map('mysql_real_escape_string', array_values($inserts));
		$keys = array_keys($inserts);
		
		$query = str_replace('\\','', 'INSERT INTO `'.$table.'` (`'.implode('`,`', $keys).'`) VALUES ('.implode(',', $values).')');
		$this->write($query);
		return mysql_query($query, $db);
	}
	
	// Функция, която записва текста на всяка справка, която правим. Помага да откриваме грешки по-лесно.
	public function write($query) {
		$handle = fopen('include/queries.txt', 'a+');
		fwrite($handle, "\r\n" . $_SESSION['user_id'] . '@' . date('d.m.Y', time()) . '@' . date('H:i:s', time()) . '@' . $query);
	}
	
	// Тази функция извежда последното действие. Ще се ползва при почти всеки метод.
	function lastAction() {
		return '(SELECT action_id FROM action WHERE USER_ID = '.$_SESSION["user_id"].' ORDER BY ACTION_ID DESC LIMIT 1)';
	}
	
	// Вмъкване на код за действие
	function action($action_type_id) {
		
		// При регистрация на нов потребител $_SESSION['user_id'] е празно и тогава слагаме справка, която връща последния ключ на потребител и добавя 1.
		if ( $action_type_id == 5 ) {
			$user_id = '(SELECT user_id FROM user ORDER BY user_id DESC LIMIT 0,1) + 1';
		} else {
			$user_id = $_SESSION['user_id'];
		}
		
		$this->mysqlInsert('action', array(
			'action_id' 		=> 'NULL',
			'user_id' 			=> $user_id,
			'action_date' 		=> 'NOW()',
			'action_type_id' 	=> $action_type_id,
		));
			
	}

	// Вмъкване на нова статия.
	function post($post_name, $post_text, $category) {
		
		$this->mysqlInsert('post', array(
			'post_id' 			=> 'NULL',
			'action_id' 		=> $this->lastAction(), // С $this взимаме метод от настоящия клас.
			'user_id' 			=> $_SESSION['user_id'] ,
			'post_name' 		=> $post_name ,
			'post_text' 		=> $post_text ,
			'post_date' 		=> 'NOW()',
		));
		
	}
	
	function tag($tag_name) {
		$this->mysqlInsert('tag', array(
			'action_id'			=> 5,
			'tag_id' 			=> 'NULL',
			'tag_name' 			=> $tag_name , 
		));
		
	}
	
	function postTag($post_id, $tag_id) {
		$this->mysqlInsert('post_tag', array(
			'post_id' 			=> $post_id ,
			'tag_id' 			=> $tag_id , 
		));
	}

	// Вмъкване на нов потребител
	function user($first_name, $last_name, $username, $password, $email) {
		
		$this->mysqlInsert('user', array(
			'user_id' 			=> 'NULL',
			'action_id' 		=> '(SELECT action_id FROM action ORDER BY action_id DESC LIMIT 0,1)', // При регистрация на нов потребител $_SESSION['user_id'] е празно и тогава слагаме справка, която връща последния ключ за действие.
			'first_name' 		=> '"' . $first_name . '"',
			'last_name' 		=> '"' . $last_name. '"',
			'username' 			=> '"' . $username. '"',
			'password' 			=> '"' . $password. '"',
			'email' 			=> '"' . $email. '"',
			'user_type_id' 		=> '2',
		));
			
	}
	function comment($comment_name, $comment_text, $post_id) {
		
		$this->mysqlInsert('comment', array(
		'post_id' 			=> $post_id,
			'action_id' 		=> '3',
			'comment_author' 	=> '"' . $_SESSION['user_id'] . '"',
			'comment_name' 		=> "'" . $comment_name. "'",
			'comment_text' 		=> "'" . $comment_text. "'",
			'comment_date' 		=> 'NOW()',
		));
			
	}
}

