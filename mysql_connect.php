<?php

include 'config.php';

function connect_to_db() {
	global $database_host;
	global $database_username;
	global $database_password;
	global $database_name;
	$link = mysqli_connect($database_host, $database_username, $database_password, $database_name);
	if (!$link) die('failed to connect to database');
	return $link;
}
// $link = mysqli_connect("127.0.0.1", "whsclxh", "1234","newdatabase"); 

// if (!$link)
// {
// 	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
// }
// ;


?>