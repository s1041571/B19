<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>SuccuBook</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css?2" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

		<style>
		::placeholder {
		    color: #39454b;
		    opacity: 1; /* Firefox */
		}

		:-ms-input-placeholder { /* Internet Explorer 10-11 */
		   color: #39454b;
		}

		::-ms-input-placeholder { /* Microsoft Edge */
		   color: #39454b;
		}
		</style>
	</head>
	<body>
			<!--FB登入-->
			<script>
			  // This is called with the results from from FB.getLoginStatus().
			  function statusChangeCallback(response) {
			    console.log('statusChangeCallback');
			    console.log(response);
			    // The response object is returned with a status field that lets the
			    // app know the current login status of the person.
			    // Full docs on the response object can be found in the documentation
			    // for FB.getLoginStatus().
			    if (response.status === 'connected') {
			      // Logged into your app and Facebook.
			      testAPI();
			    } else {
			      // The person is not logged into your app or we are unable to tell.
			      document.getElementById('status').innerHTML = 'Please log ' +
			        'into this app.';
			    }
			  }

			  // This function is called when someone finishes with the Login
			  // Button.  See the onlogin handler attached to it in the sample
			  // code below.
			  function checkLoginState() {
			    FB.getLoginStatus(function(response) {
			      statusChangeCallback(response);
			    });
			  }

			  window.fbAsyncInit = function() {
			    FB.init({
			      appId      : '574325519601547',
			      cookie     : true,  // enable cookies to allow the server to access 
			                          // the session
			      xfbml      : true,  // parse social plugins on this page
			      version    : 'v2.8' // use graph api version 2.8
			    });

			    // Now that we've initialized the JavaScript SDK, we call 
			    // FB.getLoginStatus().  This function gets the state of the
			    // person visiting this page and can return one of three states to
			    // the callback you provide.  They can be:
			    //
			    // 1. Logged into your app ('connected')
			    // 2. Logged into Facebook, but not your app ('not_authorized')
			    // 3. Not logged into Facebook and can't tell if they are logged into
			    //    your app or not.
			    //
			    // These three cases are handled in the callback function.

			    FB.getLoginStatus(function(response) {
			      statusChangeCallback(response);
			    });

			  };

			  // Load the SDK asynchronously
			  (function(d, s, id) {
			    var js, fjs = d.getElementsByTagName(s)[0];
			    if (d.getElementById(id)) return;
			    js = d.createElement(s); js.id = id;
			    js.src = "https://connect.facebook.net/en_US/sdk.js";
			    fjs.parentNode.insertBefore(js, fjs);
			  }(document, 'script', 'facebook-jssdk'));

			  // Here we run a very simple test of the Graph API after login is
			  // successful.  See statusChangeCallback() for when this call is made.
			  function testAPI() {
			    console.log('Welcome!  Fetching your information.... ');
			    FB.api('/me', function(response) {
			      console.log('Successful login for: ' + response.name);
			      document.getElementById('status').innerHTML =
			        'Thanks for logging in, ' + response.name + '!';
			    });
			  }
			</script>

			<!--
			  Below we include the Login Button social plugin. This button uses
			  the JavaScript SDK to present a graphical Login button that triggers
			  the FB.login() function when clicked.
			-->

			

			<div id="status">
			</div>

			


			
		<!-- Header -->
			<header id="header">		
				
				<div class="topnav" id="myTopnav">
				<nav>	
					    <a href="/index/index.php">首頁</a>
						<a href="/index/index.php">產品介紹</a>
						<!--
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php">Q&A</a>
						-->
						<!--<li><a href="http://120.110.112.177:1660/AnalysisOfPlants/befanaysisOfPlantsore/index.php#contact">Contact</a></li>-->			
						<!--<li><a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/warn.php">Album</a></li>-->
		                <a href="./share_login.php">登入/註冊</a>
		                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
				</nav>
			</div>
				<script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
			
			</header>

	<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content">

					<header>
						<h2>登入</h2>
						
					</header>
					
				  <div class="box">
					
						<form name="form1" method="post" action="share_checklogin.php">
							<div class="field"><input type="email" name="email" placeholder="請輸入信箱" required></div>
							<div class="field"></div>
							<div class="field"><input type="password" name="password" placeholder="請輸入密碼" required></div>
							<div class="field"></div>

								<fb:login-button 
								  scope="public_profile,email"
								  onlogin="checkLoginState();">
								</fb:login-button>

							<div class="field">還沒有帳戶嗎?立即<a href="share_register.php">註冊</a></div>
							
							<ul class="actions">
								<li><input name="Login" value="登入" type="submit"></li>
							</ul>
						</form>
					</div>
				</div>
			</section>
<!-- Footer -->
			<footer id="footer">
		
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