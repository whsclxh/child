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
?>
<link rel="stylesheet" href="css/table.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/detail.css" crossorigin="anonymous">
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