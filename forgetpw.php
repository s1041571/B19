<?php
    $result="";
    $email="";

        if(isset($_POST['forgetpw'])){
        $email = $_POST['email'];
        $enabled = 1;  //信箱是否啟用 0為未啟用 1為啟用
        $random = rand();

        $db = mysqli_connect("localhost","root","");
        mysqli_set_charset($db,"utf8");
        mysqli_select_db($db, "dreamcreator");

        $sql = "SELECT enabled FROM customer_information WHERE email ='" . $email."'";
        $row = mysqli_fetch_row($sql);
        if(mysqli_fetch_assoc(mysqli_query($db, $sql)) == false || $row[0]==0){
            $result = "查無此帳號，如尚未開通，請至您的信箱收信。";
        }else{
            if(!mysqli_query($db, $sql)){
                //fail for connecting to DB
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';               
            }
            else{
                //success and send email to check!!!
                require_once('../PHPMailer/PHPMailerAutoload.php'); //引入phpMailer 記得將路徑換成您自己的path
                $mail= new PHPMailer(); //初始化一個PHPMailer物件
                $mail->Host = "smtp.gmail.com"; //SMTP主機 (這邊以gmail為例，所以填寫gmail stmp)
                $mail->IsSMTP(); //設定使用SMTP方式寄信
                $mail->SMTPAuth = true; //啟用SMTP驗證模式
                $mail->Username = "AnalysisOfPlants@gmail.com"; //您的 gamil 帳號
                $mail->Password = "u/3vu;41u04g4"; //您的 gmail 密碼
                $mail->SMTPSecure = "ssl"; // SSL連線 (要使用gmail stmp需要設定ssl模式) 
                $mail->Port = 465; //Gamil的SMTP主機的port(Gmail為465)。
                $mail->CharSet = "utf-8"; //郵件編碼
                  
                $mail->From = "AnalysisOfPlants@gmail.com"; //寄件者信箱
                $mail->FromName = "AnalysisOfPlants團隊"; //寄件者姓名
                $mail->AddAddress($email, $name); //收件人郵件和名稱
                $mail->AddBCC('anna860625@gmail.com'); //設定 密件副本收件人 
                
                $mail->IsHTML(true); //郵件內容為html 
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //添加附件(若不需要則註解掉就好)
                 
                $mail->Subject = "忘記密碼信件"; //郵件標題
                $mail->Body ="您好:<br/>nbsp;nbsp;nbsp;nbsp;您的新密碼為:".$random;
                /*您的會員帳戶已成功建立，您可以使用您的電子郵件和密碼從以下網址登入到我們的網站"."http://120.110.112.177:183/AnalysisOfPlants/register/".$path."登入後, 您可使用會員中心的所有服務，感謝您的支持與愛護AnalysisOfPlants!";*/ //郵件內容
                $mail->AltBody = '您的電子信箱，不支援HTML。';

                
                if(!$mail->send()) {
                    echo '信件發送失敗!!';    
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {    
                    echo '信件已發送!!';
                }
                

                //跳轉至輸入驗證碼的網頁
                //重定向瀏覽器 
                header("Location: http://localhost/AnalysisOfPlants/index.php"); 
                
            }
        }
    }else{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=../index.html>';
    }

    print $result;
?>