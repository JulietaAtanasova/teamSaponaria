<?php

class Select {

	// Универсален метод за пускане на SELECT справка.
	public function mysqlRun($query) {
		$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
		$this->write($query);
		return mysql_query($query, $db);	
	}

	// Метод, който записва текста на всяка справка, която правим. Помага да откриваме грешки по-лесно.
	public function write($query) {
		$handle = fopen('include/queries.txt', 'a+');
		fwrite($handle, "\r\n" . $_SESSION['user_id'] . '@' . date('d.m.Y', time()) . '@' . date('H:i:s', time()) . '@' . $query);
	}
	
	// Тази справка вади ключа на последната статия.
	// В WHERE условието има втора справка, която вади последния код на потребителя - така познава коя е последната статия на потребителя.
	function lastPost() {
		$query = 
			"SELECT post_id " . 
			"FROM post " .
			"WHERE action_id = (SELECT action_id FROM action WHERE user_id = '" . $_SESSION['user_id'] . "' ORDER BY action_id DESC LIMIT 0,1)";
		return $this->mysqlRun($query);
	}

	// Тази справка вади информация за конкретна статия, определена по post_id.
	// Връзваме таблица user с LEFT JOIN към таблица post, за да имаме и данните на автора.
	function article($post_id) {
		$query = 
			"SELECT T0.post_id, T0.post_text, T0.post_date, T0.post_name, T1.first_name, T1.last_name, T1.username " . 
			"FROM post T0 " .
			"LEFT JOIN user T1 ON T0.user_id = T1.user_id " . 
			"WHERE T0.post_id = '" . $post_id . "'";
		return $this->mysqlRun($query);
	}
	function lastArticles($count) {
		$query = 
			"SELECT T0.post_id, T0.post_text, T0.post_date, T0.post_name, T1.first_name, T1.last_name, T1.username " . 
			"FROM post T0 " .
			"LEFT JOIN user T1 ON T0.user_id = T1.user_id " . 
			"ORDER BY T0.post_date DESC " .
			"LIMIT 0," . $count;
		return $this->mysqlRun($query);
	}
	function getComments($post_id) {
		$query = "SELECT comment_date, comment_author, comment_text, comment_name FROM comment WHERE post_id = '" . $post_id . "'";
		return $this->mysqlRun($query);
	}

}