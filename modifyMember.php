<?php
    error_reporting(0);
    session_start();
    if( !isset($_SESSION['user_id']) ){
       header("Refresh:0.1; url= http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/warn.php");
    }

    else{
        $db = mysqli_connect("localhost","root","");
        mysqli_set_charset($db,"utf8");
        mysqli_select_db($db, "dreamcreator");

        $sql2 = "SELECT email FROM customer_information WHERE customerID ='" . $_SESSION['user_id']."'";

        if ($result=mysqli_query($db,$sql2)){
             while ($row=mysqli_fetch_row($result)){
                $results=$row[0];
            }
        }

        $target_dir = "customer_picture";
        date_default_timezone_set('Asia/Taipei');
        $target_file = $target_dir."/".date('YmdHis').".jpg";
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $id=$_SESSION['user_id'];

        mysqli_close($db);
    }
   

?>

<!DOCTYPE HTML>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    
</head>

<body background="C:/xampp/htdocs/AnalysisOfPlants/anaysisOfPlants/intro.JPG">
    <!--TOP-->
    <header id="header">
        <h1>Anaysis of plants</h1>
        <nav>
          <ul>
          
            <li><a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php#one">Intro</a></li>
            <li><a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php#two">How to use</a></li>
            <li><a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php#work">Team</a></li>
            <li><a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php#contact">Contact</a></li>   
            <li><a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/ablum/al.php">Album</a></li>
            <li><a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/member.php">會員專區</a></li>
            <li><?php echo $results."您好"; ?></li>
            <li><a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/logout.php">登出</a></li>

          </ul>
        </nav>
    </header>

  <!-- Contact -->
  <center>

<section id="contact" class="main style2">
	<div class="content">
        <header>

          <h2>Modify</h2>
            
        </header>
          
    <div class="box">

<form id="usersignup" name="usersignup" method="post" action="modifyMemberAfter.php" enctype="multipart/form-data">

	<div class="field">
 	<input type="text" id="name" placeholder="請輸入新姓名" name="newname" required>
	</div>

	<div class="field">
	<input name="newpassword1" id="newpassword1" type="password"
	placeholder="請設定新密碼" required>
	</div>

	<div class="field">
	<input name="newpassword2" id="newpassword2" type="password" placeholder="請再次輸入新密碼" required>
	</div>

	<div class="field">
	<select name="newcareer" required>
		<option value="">請選擇職業</option>
        <option value="student">學生</option>
        <option value="Office worker">上班族</option>
        <option value="worker">工</option>
        <option value="businessman">商</option>
    </select> 
	</div>

    <div class="field">
        大頭貼上傳:  <input type="file" name="fileToUpload" id="fileToUpload">
    </div>

    <br>

	<ul class="actions">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">確定送出</button>
        <button type="reset" >重設</button>
    </ul>

</form>	

</div> <!-- /container -->
</section>

<footer id="footer">
    <ul class="actions">
    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
    </ul>
</footer>

	<script src="js/jquery-2.2.4.min.js"></script>
    <script src="//code.jquery.com/jquery.js"></script> 
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

	<script>

	$( "#usersignup" ).validate({

	  rules: {
	    name : {
	      required: true,
	      minlength: 2
	    },
	    newpassword1: {
	      required: true,
	      minlength: 4,
	      pattern: /^[a-zA-Z0-9]+$/
	    },
	    newpassword2: {
	      equalTo: "#newpassword1"
	    }
	  }

	});

	</script>

</body>

</html>


