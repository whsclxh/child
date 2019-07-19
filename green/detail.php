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
$detail=$_SESSION['detail'];
$PL = "SELECT * FROM product_list WHERE list='$detail' ORDER BY cost+0 DESC";
$result = mysqli_query($link,$PL);
$row = mysqli_fetch_row($result);

$list = "SELECT * FROM shopping_cart where Account = '$Account'";
$result1 = mysqli_query($link,$list);
$listr = @mysqli_fetch_row($result1);
?>
<link rel="stylesheet" href="css/table.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/detail.css" crossorigin="anonymous">
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script>
	$(document).ready(function(){
        $("#button").click(function(){
        	var input=document.createElement("input");
            input.setAttribute("name","insert");
            input.setAttribute("id","insert");
            input.setAttribute("value",'<?php echo $row[3]; ?>');
            input.setAttribute("type","hidden");
            document.getElementById("div2").appendChild(input);
            <?php for($i=3;$i<=$row[1]+3;$i++){ ?>
            <?php if($listr[$i]==$row[3]) { ?>
            	alert('此商品已在購物車中!');
            	return false;
        	<?php }?>
        	document.form1.submit();
    		<?php }?>
        })
    })
</script>
<div align="center" id="div1">
<table id="newspaper-a" name="newspaper-a">
	<thead>
		<tr>
			<th>商品名稱</th>
			<th><?php echo $row[3]; ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>商品品牌</td>
			<td><?php echo $row[4]; ?></td>
		</tr>
		<tr>
			<td>商品質地</td>
			<td><?php echo $row[5]; ?></td>
		</tr>
		<tr>
			<td>商品規格</td>
			<td><?php echo $row[6]; ?></td>
		</tr>
		<tr>
			<td>商品重量</td>
			<td><?php echo $row[9]; ?></td>
		</tr>
		<tr>
			<td>商品價格</td>
			<td><?php echo $row[7]; ?></td>
		</tr>
		<tr>
			<td>商品剩餘數量</td>
			<td><?php echo $row[8]; ?></td>
		</tr>
	</tbody>
</table>
</div>
<div align="center">
	<button onclick="javascript:location.href='purchase.php'">返回商品列表</button>
	<button name="button" id="button">加入購物車</button>
</div>
<form id="form1" name="form1" action="insert_cart.php" method="post">
	<div id="div2" name="div2"></div>
</form>