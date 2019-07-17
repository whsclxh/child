<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.html>';
}
?>
<span><a href="purchase.php">purchase</a></span>
|
<span><a href="update.php">update</a></span>
|
<span><a href="record.php">record</a></span>
|
<span><a href="logout.php">logout</a></span>