<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<form name="form" method="post" action="verification.php">
		請輸入驗證碼：<input type="text" name="verification_code" size=10 maxlength=10/> <br>
		<input type="submit" name="verification" value="提交" />
	</form>

	<form name="form" method="post" action="verification.php" target="nm_iframe">
		<input type="submit" name="Re" value="重新寄送驗證碼" />
	</form> 
	<iframe id="id_iframe" name="nm_iframe" style="display:none;"></iframe>

</body>
</html>

<?php

	session_start();

	$verification_code="";

	if(isset($_POST['verification'])){
		$verification_code = $_POST['verification_code'];

		$db = mysqli_connect("localhost","root","");
		mysqli_set_charset($db,"utf8");
	    mysqli_select_db($db, "dreamcreator");

	    $sql = "SELECT random FROM customer_information WHERE random ='" . $verification_code."'";
	    $sql1 = "SELECT enabled FROM customer_information WHERE enabled = 0";

	    if(!mysqli_fetch_assoc(mysqli_query($db, $sql))){
	    	echo "請重新輸入";
	    }else{
	    	
	    	$sql2 = "UPDATE customer_information SET enabled=1 WHERE random='".$verification_code."'";
	    	mysqli_query($db, $sql2);
	    	header("Location: http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index/index.php");

	    }
	}

	if(isset($_POST['Re'])){

		$db = mysqli_connect("localhost","root","");
		mysqli_set_charset($db,"utf8");
	    mysqli_select_db($db, "dreamcreator");

	    $random = rand();
      	$sql2 = "SELECT random FROM customer_information WHERE random ='" . $random."'";

      	$old = $_SESSION['random'];

	    while(mysqli_fetch_assoc(mysqli_query($db, $sql2)) == true){
      		$random = rand();

      		$sql = "UPDATE customer_information SET random='".$random."' WHERE random='".$old."'";
      		mysqli_query($db, $sql);

      		$old = $random;

	    	$sql2 = "SELECT random FROM customer_information WHERE random ='" . $random."'";
	    }
	   	$_SESSION['random'] = $random;

  		echo !extension_loaded('openssl')?"Not Available<br>":"Available<br>";

		require 'C:/xampp/htdocs/AnalysisOfPlants/PHPMailer-master/src/Exception.php';
		require 'C:/xampp/htdocs/AnalysisOfPlants/PHPMailer-master/src/OAuth.php';
		require 'C:/xampp/htdocs/AnalysisOfPlants/PHPMailer-master/src/PHPMailer.php';
		require 'C:/xampp/htdocs/AnalysisOfPlants/PHPMailer-master/src/POP3.php';
		require 'C:/xampp/htdocs/AnalysisOfPlants/PHPMailer-master/src/SMTP.php';

		mb_internal_encoding('UTF-8');

		$mail = new PHPMailer(true); 

		$boolean=false; 

		try {
			
		    $mail->SMTPDebug = 0;                                
		    $mail->isSMTP();                                      
		    $mail->Host = "smtp.live.com";                        
		    $mail->SMTPAuth = true;                              
		    $mail->Username = 'dreamcreator415@hotmail.com';              
		    $mail->Password = 'u/3vu;41u04g4';                         
		    $mail->SMTPSecure = 'tls';                            
		    $mail->Port = 587;                                  

		    $mail->setFrom('dreamcreator415@hotmail.com', 'DreamCreatorer小組');
		    $mail->addAddress($email, $name);     

		    $mail->isHTML(true);                                 
		    $mail->Subject = '感謝您的註冊，此封信為驗證碼';
		    $mail->Body    = '以下是您的驗證碼 <b> '.$random.' </b>';
		    
		    $mail->send();

		    $boolean=true;

		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}


		if($boolean==true){
			mysqli_query($db, $sql);
		}
	}

?>
