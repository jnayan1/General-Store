<?php

	mysql_connect('localhost','root', 'apaar123') or die ("could not connect to database");
	mysql_select_db('db_project') or die ("no database");
	
/*	$db_host = 'localhost';
	$db_name = 'db_project';
	$db_username = 'root';
	$db_password = 'apaar123';

	$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

	if($mysqli->connect_errno){
		die("Could not connect to database. Error: ". $mysqli->connect_error);
	}
*/
?>