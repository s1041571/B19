<?php
	error_reporting(0);
	session_start();
	if( isset($_SESSION['user_id']) ){
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

	mysqli_close($db);

?>

<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>

		<title>後宮多肉傳</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="google-site-verification" content="aoFTZPFtN-naSX0ZZRccI4igAGPz7PtVIgxyaLNd8ZQ" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
		<!-- Google Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('send', 'pageview');
		</script>
		<!-- End Google Analytics -->
	</head>

	<body>
	<?php if( !empty($sql2) ): ?>
			<header id="header">		
				
				<div class="topnav" id="myTopnav">
				<nav>	
					    <a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index/index.php">新後宮多肉傳</a>
						<a href="#one">產品介紹</a>
						<a href="#two"></a>
						<a href="#work">團隊介紹</a>
						<a href="#contact">聯絡資訊</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php">Q&A</a>	
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/ablum/al.php">相簿</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/member.php">會員專區</a>
						<a><?php //echo $results."您好"; ?></a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/logout.php">登出</a>
						<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
				</nav>
				</div>
				<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>


		</header>
	
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2>後宮多肉傳</h2>
					</header>
					<p>拍張照吧!我們會幫助你認識你的多肉寶貝!</p>
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section class="main style2 right dark fullscreen" id="one" name="one">
				<div class="content box style2">
					<header>
						<h2>What is this</h2>
					</header>
					<p>這是一個幫助您認識多肉植物的網頁，您只需要以手機或平板開啟此網頁，並對準多肉植物拍下一張照片，我們將會為告訴您有關此多肉植物的故事
					</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>

		<!-- Two -->
        
					<section id="two" class="main style2 left dark fullscreen">
					  <div class="content box style2">
					    <header>
					      <h2>Just Take a Picture</h2>
				        </header>
					    <p>不需要下載，只要使用手機內建相機，按下「分析」鈕，我們則立即傳送檔案到資料庫做圖像識別，並回傳分析結果以及各種相關資料，讓出門在外的您，不需要攜帶厚重的工具書，不需要花時間翻找，一支手機就能為您解答您的疑惑。</p>
				      </div>
    <a href="#work" class="button style2 down anchored">Next</a> </section>
					
                    

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2>Team Mambership</h2>
						<p></p>
					</header>

					<!-- Gallery  -->
						<div class="gallery">
							<article class="from-left">
								<a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/123.jpg" title="The Anonymous Red" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/456.png" title="Airchitecture II" alt="" /></a>
							</article>
							<article class="from-left">
								<a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/789.png" title="Air Lounge" alt="" /></a>
							</article>
							<article class="from-right">
								<a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/111.jpg" title="Carry on" alt="" /></a>
							</article>
							
						</div>

				</div>
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

			<img id="buttom" src="images/camerIcon.png"/>


			<!--點選相機，跳到UpAlbum畫面-->
			<script>
			$.extend($.easing, {
			easeOutExpo: function (x, t, b, c, d) {
			return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
			}
			});
			$("#buttom").click(function(){

				document.location.href = ' http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/UpAlbum.php ';
				    
				$("html, body").animate({scrollTop: 0}, 1000, "easeOutExpo");
				
			});
			</script>




<!-- =================== 以"上"是"登入"時的狀態 ========================== -->


		<?php else: ;?>
			<!-- Header -->

			<header id="header">		
				
				<div class="topnav" id="myTopnav">
				<nav>	
					    <a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php">後宮多肉傳</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php#one">產品介紹</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php#work">團隊介紹</a>
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php">Q&A</a>
						<!--<li><a href="http://120.110.112.177:1660/AnalysisOfPlants/befanaysisOfPlantsore/index.php#contact">Contact</a></li>-->			
						<!--<li><a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/warn.php">Album</a></li>-->
		                <a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/logIn.php">登入/註冊</a>
		                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
				</nav>
			</div>
				<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>

				<style>
					/* buttom按鈕 */
					#buttom {
						position: fixed;
						bottom: 10%; /* 與下方的距離, 也可改為百分比, 即為距離螢幕下方的百分比 */
						right: 10%; /* 與右方的距離 */
						width: 80px; /* 按鈕原始寬度 */
						height: 80px; /* 按鈕原始高度 */
						opacity: 0.4; /* 按鈕原始透明度 */
						z-index: 10;
						cursor: pointer;
						transition: all .5s; /* 動畫效果 持續期間 */
						-webkit-transition: all .5s;
						-moz-transition: all .5s;
					}
					/* 滑鼠經過按鈕時 */
					#buttom:hover { 
						opacity: 1; /* 透明度 */
					}
				</style>
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
			
			<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content">
					<header>
						<h2>後宮多肉傳</h2>
					</header>

					<p>拍張照吧!我們會幫助你認識你的多肉寶貝!</p>

					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>

			<!-- One -->
			<section class="main style2 right dark fullscreen" id="one" name="one">
				<div class="content box style2">
					<header>
						<h2>What is this</h2>
					</header>

					<p>這是一個幫助您認識多肉植物的網頁，您只需要以手機或平板開啟此網頁，並對準多肉植物拍下一張照片，我們將會為告訴您此多肉植物的故事。</p>
				</div>

				<a href="#two" class="button style2 down anchored">Next</a>
			</section>

			<!-- Two --> 
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Just Take a Picture</h2>
					</header>
					<p>不需要下載，只要使用手機內建相機，按下「分析」鈕，我們則立即傳送檔案到資料庫做圖像識別，並回傳分析結果以及各種相關資料，讓您不需要翻閱厚重的工具書、不需要花時間上網搜索，一支手機就能為您解答您的疑惑。</p>
				</div>
		    	<a href="#work" class="button style2 down anchored">Next</a> 
		    </section>                

			<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content">
					<header>
						<h2>Team Mambership</h2>
						<p></p>
					</header>

					<!-- Gallery  -->
					<div class="gallery">
						<article class="from-left">
							<a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/123.jpg" title="The Anonymous Red" alt="" /></a>
						</article>
						<article class="from-right">
							<a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/456.png" title="Airchitecture II" alt="" /></a>
						</article>
						<article class="from-left">
							<a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/789.png" title="Air Lounge" alt="" /></a>
						</article>
						<article class="from-right">
							<a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/111.jpg" title="Carry on" alt="" /></a>
						</article>
									
					</div>

				</div>
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

			<!-- Go Top 按鈕+動畫 start -->
			<img id="goTop" src="images/camerIcon.png"/>

			<!-- 未登入時，點選相機，會跳到warn.php，提醒請先登入 -->
			<script>
			$.extend($.easing, {
			easeOutExpo: function (x, t, b, c, d) {
			return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
			}
			});
			$("#buttom").click(function(){

				document.location.href = ' http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/warn.php ';

			});
			</script>

		<?php endif; ?>
	</body>
</html>