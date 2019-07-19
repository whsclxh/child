<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
}
?>
<?php
include("mysql_connect.php");
$Account=$_SESSION['Account'];

$list = "SELECT * FROM shopping_cart where Account = '$Account'";
$result = mysqli_query($link,$list);
$listr = @mysqli_fetch_row($result);

$Product_number=$listr[1];
$TotalAmount=0;
$cost=array();
$final=array();

$sql = "SELECT * FROM user where Account = '$Account'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

for($x=3;$x<$Product_number+3;$x++){
    $PL = "SELECT * FROM product_list where product='$listr[$x]'";
    $result = mysqli_query($link,$PL);
    $row = mysqli_fetch_array($result);
    $cost[$x-3]=$row[7];
    $TotalAmount+=$cost[$x];
    $final[$x-3]=$listr[$x];
}
$c=count($final);
?>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="bootstrap/css/sb-admin-2.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/info.css" crossorigin="anonymous">
<script type="text/javascript">
			function get_pruduct_name(x){
        		var a='ItemName';
        		return a+x.toString();
    		}
    		function get_tr_name(x){
        		var a='tr';
        		return a+x.toString();
    		}
    		function get_td_name(x){
        		var a='td';
        		return a+x.toString();
    		}
    		function info(){
    			document.form1.action="info.php"; 
    			document.form1.submit(); 
    		}
    		function turn(){
    			document.form1.action="purchase.php";
    			return false;
    		}
</script>
<br><br>
<div style=" margin: 0 auto;">
<h2 style="text-align:  center;">購物車</h2>
<form action="a.php" method="POST" name="form1" id="form1">
	<div id="div1"></div>
    <div id="hideinput"></div>
  <div align="center">
  	<button onclick="turn()">回商品列表</button>
  	<button type="submit" onclick="info()">前往付款頁面</button>
  </div>
</form>
<script type="text/javascript">
			tableNode=document.createElement("table");//获得对象
            tableNode.setAttribute("id","hor-minimalist-b");
            tableNode.setAttribute("cellspacing","0");
            tableNode.setAttribute("class","hor-minimalist-b");
            //上面确定了 现在开始创建
            <?php $e=array(); ?>
			<?php for($x=0;$x< $Product_number;$x++){ ?>
            <?php $y=$x+3;?>	
            var trNode=tableNode.insertRow();
			trNode.setAttribute("id",get_tr_name(<?php echo "$x"; ?>));
            trNode.setAttribute("name",get_tr_name(<?php echo "$x"; ?>));
            var tdNode1=trNode.insertCell();
            tdNode1.innerHTML='<?php echo "$listr[$y]" ?>';
            var tdNode2=trNode.insertCell();
            tdNode2.innerHTML='<?php echo "$cost[$x]"; ?>';
            var tdNode3=trNode.insertCell();
            tdNode3.innerHTML='<select name=qua<?php echo "$x"; ?> id=qua<?php echo "$x"; ?>><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>';
            var tdNode4=trNode.insertCell();
            tdNode4.setAttribute("id",get_td_name(<?php echo "$x"; ?>));
            tdNode4.setAttribute("name",get_td_name(<?php echo "$x"; ?>));
            tdNode4.innerHTML='<?php echo "$cost[$x]"; ?>';
            var tdNode5=trNode.insertCell();
            tdNode5.innerHTML='<button name=cancel<?php echo "$x"; ?> id=cancel<?php echo "$x"; ?> value=<?php echo "$x"; ?>>取消</button>';
            $(function(){
        		$(document).ready(function(){
            		$("#qua<?php echo"$x" ?>").change(function(){
                		var quantity=$(this).val();
						var one_price=<?php echo "$cost[$x]"; ?>;
						var price=quantity*one_price;
						var tr=document.getElementById("td<?php echo "$x"; ?>");
						tr.innerHTML=price;
						tr.setAttribute("value",price);
        			});
        		});
			})
			
			$(function(){
        		$(document).ready(function(){
					$("#cancel<?php echo"$x" ?>").click(function(){
						var input=document.createElement("input");
						input.setAttribute("name","cancel");
						input.setAttribute("id","cancel");
						input.setAttribute("value","<?php echo"$x" ?>");
						input.setAttribute("type","hidden");
						document.getElementById("hideinput").appendChild(input);
						document.form1.submit();
        			});
        		});
			})
            <?php } ?>
            document.getElementById("div1").appendChild(tableNode);//添加到那个位置
            var table = document.getElementById("hor-minimalist-b");
            var header = table.createTHead();
            var row = header.insertRow(0);
            var cell0 = row.insertCell(0);
            cell0.innerHTML = "<b>商品名稱</b>";
            var cell1 = row.insertCell(1);            
            cell1.innerHTML = "<b>單價</b>";
            var cell2 = row.insertCell(2);            
            cell2.innerHTML = "<b>數量</b>";
            var cell3 = row.insertCell(3);            
            cell3.innerHTML = "<b>小計</4>";
            var cell4 = row.insertCell(4);            
            cell4.innerHTML = "<b>動作</b>";
          </script>
          
