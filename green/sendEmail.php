<?php
    include("mysql_connect.php");
    include("class.phpmailer.php"); //匯入PHPMailer類別
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/SMTP.php';
    function get_Password(){
        $chars = ['0','1','2','3','4','5','6','7','8','9',
                'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
                'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
                for($i=0;$i<10;$i++){
                    $id = rand(0,61);
                $res .= $chars[$id];
                }
                return $res;
    }
    $account=$_POST['account'];
    $email=$_POST['email'];
    $find="SELECT * FROM user WHERE Account='$account' AND Email='$email'";
    $result=mysqli_query($link,$find);
    $row=mysqli_fetch_row($result);
    if($row==null){
        echo "<script>alert('找不到此帳號or郵件地址!');</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=ForgetPassword.html>';
    }
    $password=get_Password();
    $mail= new PHPMailer();                             //建立新物件
    $mail->SMTPDebug = 2;                        
    $mail->IsSMTP();                                    //設定使用SMTP方式寄信
    $mail->SMTPAuth = true;                        //設定SMTP需要驗證
    $mail->SMTPSecure = "ssl";                    // Gmail的SMTP主機需要使用SSL連線
    $mail->Host = "smtp.gmail.com";             //Gamil的SMTP主機
    $mail->Port = 465;                                 //Gamil的SMTP主機的埠號(Gmail為465)。
    $mail->CharSet = "utf-8";                       //郵件編碼
    $mail->Username = "zxc1900542";       //Gamil帳號
    $mail->Password = "qwe1900542";                 //Gmail密碼
    $mail->From = "zxc1900542@gmail.com";        //寄件者信箱
    $mail->FromName = "password";                  //寄件者姓名
    $mail->Subject ="----------------------------請確認您的密碼----------------------------"; //郵件標題
    $mail->Body = "請確認您的密碼並記下"."<br>帳號:".$row[0]."<br>密碼:".$password;//郵件內容
    $mail->IsHTML(true);                             //郵件內容為html
    $mail->AddAddress("$email");            //收件者郵件及名稱
    if(!$mail->Send()){
        echo "Error: " . $mail->ErrorInfo;
        echo '<meta http-equiv=REFRESH CONTENT=1;url=ForgetPassword.html>';
        echo "<script>alert('寄信發生錯誤：'. $mail->ErrorInfo);</script>";
    }else{
        $updata="update user set Password='$password' where Account='$account' AND Email='$email'";
        if(mysqli_query($link,$updata)){
            echo '<meta http-equiv=REFRESH CONTENT=1;url=Home.html>';
            echo "<script>alert('已送出信件!請到信箱收信並重新登入並修改密碼');</script>";
        }else{
            die ("pay失敗儲存失敗".mysql_error()); //執行sql語法
        }
    }
    
?>