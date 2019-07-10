<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "green";
//資料庫管理者帳號
$db_user = "root";
//資料庫管理者密碼
$db_passwd = "12345678";

$qaq=new mysqli($db_server, $db_user, $db_passwd ,$db_name);
//對資料庫連線

//資料庫連線採UTF8
mysqli_query($qaq,"SET NAMES utf8");

//選擇資料庫
if(!@mysqli_select_db($qaq,$db_name))
        die("無法使用資料庫");
?> 