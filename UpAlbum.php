<?php

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
	}

?>			


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=big5">
		<title>上傳檔案</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>

	<body>

		<header id="header">
			<div class="topnav" id="myTopnav">
				<nav>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index/index.php">首頁</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index/index.php">產品介紹</a>
						<a href="#">Q&A</a>	
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/admin/index.php">會員專區</a>
						<!--<a><?php //echo $results."您好"; ?></a>-->
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/logout.php">登出</a>
						<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
				</nav>
			</div>
			<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
					<script>
						function myFunction() {
		   				var x = document.getElementById("myTopnav");
		   				if (x.className === "topnav") {
		       			x.className += " responsive";
		    			} else {
		        		x.className = "topnav";
		    			}
					}
					</script>
		</header>
		<br>
		<form action="UpAlbum.php" method="post" enctype="multipart/form-data">
	    	選擇檔案:
	    	<input type="file" name="fileToUpload" id="fileToUpload">
	    	<br/><br/><br/>
	    	<input type="submit" value="上傳檔案" name="submit">
		</form>

		<?php	
				
			error_reporting(0);

			$target_dir = "webcamImage";
			date_default_timezone_set('Asia/Taipei');
			$target_file = $target_dir."/".date('YmdHis').".jpg";
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$pic=$_SESSION['user_id'];
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			       // echo "File is an image - " . $check["mime"] . ".";
			    	echo "檔案上傳成功";
					if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "camera/".$target_file)){
						
				        $query="Insert into picture (picture,customerID) values('$target_file','$pic')";
				        mysqli_query($db, $query);

				        $uploadOk = 1;

					}

			    } else {
			        //echo "File is not an image.";
			        echo "檔案上傳失敗";
			        $uploadOk = 0;
			    }
			}

			mysqli_close($db);

		?>

	</body>
</html>