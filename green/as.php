<?php session_start(); ?>
<?php
include("mysql_connect.php");
$Account=$_SESSION['Account'];
$cardinal='3';
$list = "SELECT * FROM front where Account = '$Account' AND cardinal='$cardinal'";
            $listre = mysqli_query($link,$list);
            $listr = @mysqli_fetch_row($listre);
            $first=explode("#", $listr[8]);
            $c=count($first);
            $second=arraY();
            for ($i=0;$i<$c-1;$i++) {
                $second[$i]=explode("*",$first[$i]);
            }
            for($j=0;$j<$c-1;$j++){
                $k=$second[$j][0];
                $l = "SELECT * FROM product_list where Product = '$k'";
                $li = mysqli_query($link,$l);
                $lis = @mysqli_fetch_row($li);
                $third=(int)$lis[8]-(int)$second[$j][1];
                $up="updata product_list set Amount=$third where list='$lis[0]'";
                mysqli_query($link,$up)or die ("pay失敗儲存失敗".mysql_error());
            }


?>