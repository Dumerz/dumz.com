<?php

	function db_error() {
		echo '<center><h1 class="glyphicon glyphicon-trash"> </h1><h3>Error Database</h3></center>';
	}

	function sys_error() {
		echo '<center><h1 class="glyphicon glyphicon-warning-sign"> </h1><h3>Fail to Connect</h3></center>';
	}

	function db_connect() {
		$connect = mysql_connect('127.0.0.1', 'root', '');
			if (!$connect) exit(sys_error());
			if (!mysql_select_db("dumz")) exit(db_error());
	}

	db_connect();

?>