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

	}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Anaysis of plants</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>

	<body>

		<header id="header">
				<div class="topnav" id="myTopnav">
					<nav>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php">後宮多肉傳</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php#one">產品介紹</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php#two">操作說明</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php#work">團隊介紹</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php#contact">聯繫我們</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/ablum/al.php">相簿</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/member.php">會員專區</a>
						<a><?php echo $results."您好"; ?></a>
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

			<section id="contact" class="main style3 secondary">
				<div class="content">

					<header>
						<h2>會員專區</h2>
						
					</header>
				
				
				<div class="box">

				  	<br>

				  	<div class="field" style="width:745px;height:60px;">
				  		<?php 

					  		$sql2="SELECT MemberPicture FROM member WHERE customerID ='" . $_SESSION['user_id']."'"; 
					  		if ($result=mysqli_query($db,$sql2)){
								 while ($row=mysqli_fetch_row($result)){
					    			$pic=$row[0];
					    		}
							}
					  		echo "<div><img src='http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/".$pic."' width='100px' height='100px'></div>";

				  		?>

				  	</div>

				  	<br><br><br>
				  		
				  		<div class="field" style="width:745px;height:60px;">姓名 :
				  		<?php 
					  		$sql2="SELECT name FROM customer_information WHERE customerID ='" . $_SESSION['user_id']."'"; 
					  		if ($result=mysqli_query($db,$sql2)){
								 while ($row=mysqli_fetch_row($result)){
					    			$name=$row[0];
					    		}
							}
					  		echo $name;
				  		?>
				  		</div>

				  		<br>

				  		<div class="field"  style="width:900px;height:60px;">信箱 :  
				  		<?php 
					  		$sql2="SELECT email FROM customer_information WHERE customerID ='" . $_SESSION['user_id']."'"; 
					  		if ($result=mysqli_query($db,$sql2)){
								 while ($row=mysqli_fetch_row($result)){
					    			$email=$row[0];
					    		}
							}
					  		echo $email;
				  		?>

				  		</div>

				  		<br>

				  		<div class="field" style="width:820px;height:60px;">生日 :  
				  		<?php 
					  		$sql2="SELECT birthday FROM customer_information WHERE customerID ='" . $_SESSION['user_id']."'"; 
					  		if ($result=mysqli_query($db,$sql2)){
								 while ($row=mysqli_fetch_row($result)){
					    			$birthday=$row[0];
					    		}
							}
					  		echo $birthday;
				  		?>

				  		</div>

				  		<br>

				  		<div class="field" style="width:790px;height:60px;">職業 :  
				  		<?php 
					  		$sql2="SELECT career FROM customer_information WHERE customerID ='" . $_SESSION['user_id']."'"; 
					  		if ($result=mysqli_query($db,$sql2)){
								 while ($row=mysqli_fetch_row($result)){
					    			$career=$row[0];
					    		}
							}
					  		echo $career;
				  		?>

				  		</div>

				  		<br><br>

						<div class="field" style="color:red;"><a href="modifyMember.php">修改會員資料</a></div>
					</div>
				</div>
			</h1>
			</section>
<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						
					</ul>

		
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>