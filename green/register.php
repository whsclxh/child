<?php
include 'mysql_connect.php';
$Account=$_POST['Account'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Phone=$_POST['Phone'];
$Gender=$_POST['sex'];
$Name=$_POST['Uname'];
$city=$_POST['city'];
$town=$_POST['town'];
$Zipcode=$_POST['zipcode'];
$Address=$_POST['Address'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$Address=$city.$town.$Address;
$Birth=$year.'.'.$month.'.'.$day;
$sql = "SELECT * FROM user where Account = '$Account'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);
if($row[0] == $Account){
    echo "<script>alert('此帳號已註冊過!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=CreateAccount.php>';       
}else if($Account != null && $Password != null){
	$updata="insert into user (Account,Email,Password,Phone,Name,Gender,Address,Zipcode,Birth) values 
			('$Account','$Email','$Password','$Phone','$Name','$Gender','$Address','$Zipcode','$Birth')";
	if(mysqli_query($link,$updata)){
        echo "<script>alert('新增成功,請登入!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
    }else{
        echo "<script>alert('註冊失敗,請洽服務人員');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=CreateAccount.php>';
    }
}else{
    echo "<script>alert('技術上失誤,請洽服務人員!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=0;url=Home.html>';
}
?>