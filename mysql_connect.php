<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>PHP與MySQL建立網頁資料庫</title>
</head>
<body>
<?php
$link = mysqli_connect("127.0.0.1", "whsclxh", "1234","newdatabase"); 

if (!$link)
{
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
;


?>
</body>
</html>
