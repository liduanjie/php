<?php 
	require 'connect.inc.php';
	$query = 'SELECT `food`, `calories` FROM `food` ORDER BY `id`';
	if ($query_run = mysql_query($query)) {
		echo 'query success';
	} else {
		echo mysql_error();
		echo '<br/>';
	}
 ?>
	