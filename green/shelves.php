<?php session_start(); ?>
<?php
if($_SESSION['Account'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/demo.css">
  <link rel="stylesheet" type="text/css" href="css/city.css">
  <link rel="stylesheet" type="text/css" href="css/body.css">
  <script src="jquery-3.4.1.min.js"></script>
</head>
<title>上架貨物</title>
<body>
	<form name="form1" method="post" action="shelves_finish.php">
  <fieldset>
    <legend style="color: black; font-weight: bold;">上架貨物</legend>
    <div class="form-group">
      <label><span style="color: red;">*</span>商品名稱</label>
      <input type="text" class="form-control" id="Product" placeholder="輸入名稱" name="Product" required="required">
    </div>
    <div class="form-group">
      <label>商品品牌</label>
      <input type="text" class="form-control" id="Brand" placeholder="輸入品牌" name="Brand">
    </div>
    <div class="form-group">
      <label>商品質地</label>
      <input type="text" class="form-control" id="Texture" placeholder="輸入質地" name="Texture">
    </div>
    <div class="form-group">
      <label><span style="color: red;">*</span>商品規格</label>
      <input type="text" class="form-control" id="Specification" placeholder="輸入規格" name="Specification" required="required">
    </div>
    <div class="form-group">
      <label><span style="color: red;">*</span>商品售價</label>
      <input type="number" class="form-control" id="Cost" placeholder="輸入售價" name="Cost" required="required">
    </div>
    <div class="form-group">
      <label><span style="color: red;">*</span>商品數量</label>
      <input type="text" class="form-control" id="Amount" placeholder="輸入數量" name="Amount" required="required">
    </div>
    <div class="form-group">
      <label>商品重量</label>
      <input type="text" class="form-control" id="Weight" placeholder="輸入重量" name="Weight">
    </div>
  </fieldset>
  <br>
  <div>
    <button class="btn btn-primary" onclick="javascript:location.href='purchase.php'">返回商品頁</button>
    <button type="submit" class="btn btn-primary" id="button">提交</button>
    </div>
</form>
</body>