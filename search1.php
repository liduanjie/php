<?php 
	$con = mysql_connect("localhost", "root", "root");
	if (!$con) {
		die('could not connect:'.mysql_error());
	}
 ?>