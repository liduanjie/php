<?php 
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'learngphp';
	$conn_error = 'could not connected to the databse';

	echo !mysql_select_db($mysql_db);
	if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass)&&!mysql_select_db($mysql_db)) {
		die($conn_error);
	} else {
		echo "connected</br>";
	}

 ?>