<?php session_start(); ?>
<?php
include("mysql_connect.php"); 
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
?>
<a href="math_record.php">數學</a>
<a href="chinese_record.php">國語</a>
<a href="cognition_record.php">認知</a>
<a href="clock_record.php">時鐘</a>