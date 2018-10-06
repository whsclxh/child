<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>PHP與MySQL建立網頁資料庫</title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "whsclxh", "1234") 
        or die("無法開啟MySQL資料庫連接!<br/>");
$dbname = "newdatabase";
// 開啟指定的資料庫
if ( !mysqli_select_db($link, $dbname) )
   die("無法開啟 $dbname 資料庫!<br/>");
else
   echo "資料庫: $dbname 開啟成功!<br/>";

mysqli_close($link);  // 關閉資料庫連接
?>
</body>
</html>