<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include("class.phpmailer.php"); //匯入PHPMailer類別
include("mysql_connect.php");
$id = $_POST['email'];

$sql = "SELECT * FROM user where username = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);
	if($row[0] == $id){
		$id = $_POST['email'];
        $mail= new PHPMailer(); //建立新物件
		$mail->IsSMTP(); //設定使用SMTP方式寄信
		$mail->SMTPAuth = true; //設定SMTP需要驗證
		$mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線
		$mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機
		$mail->Port = 465;  //Gamil的SMTP主機的埠號(Gmail為465)。
		$mail->CharSet = "utf-8"; //郵件編碼

		$mail->Username = "hsa20127@gmail.com"; //Gamil帳號
		$mail->Password = "sam20127"; //Gmail密碼

		$mail->From = $Mail; //寄件者信箱
		$mail->FromName = "聖翔幼兒網"; //寄件者姓名

		$mail->Subject ="----------------------------請確認您的密碼----------------------------";  //郵件標題
		$mail->Body = "請確認您的密碼並記下"."<br>帳號:".$row[0]."<br>密碼:".$row[1]; //郵件內容

		$mail->IsHTML(true); //郵件內容為html ( true || false)
		$mail->AddAddress("$id"); //收件者郵件及名稱

		if(!$mail->Send()){
		echo "寄信發生錯誤：" . $mail->ErrorInfo;
		echo '<meta http-equiv=REFRESH CONTENT=1;url=ForgetPassword1.php>';
        echo "<script>alert('寄信發生錯誤：'. $mail->ErrorInfo);</script>";
		//如果有錯誤會印出原因
		}
		else{ 
			echo '<meta http-equiv=REFRESH CONTENT=1;url=Home.php>';
        	echo "<script>alert('已送出信件!請到信箱收信並重新登入');</script>";
		}
		}
	else{
        echo '<meta http-equiv=REFRESH CONTENT=1;url=ForgetPassword1.php>';
        echo "<script>alert('此帳號不存在!');</script>";
	}




 ?>