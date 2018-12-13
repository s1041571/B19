<!DOCTYPE HTML>

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
   <!--10/28 FB登入用Facebook JavaScript SDK-->
     <script>
       
            // This is called with the results from from FB.getLoginStatus().
            function statusChangeCallback(response) {
                console.log('statusChangeCallback');
                console.log(response);
                if(response.status === 'connected'){
                      FB.api('/me', function(response) {
                          $.ajax({
                                url: "addFbMember.php",     
                                type: "POST", 
                                data: {name : response.name,
                                       id : response.id
                                },  
                                success: function(data) {
                                  alert(response.name+'登入成功，即將跳轉至主頁面');
                                  window.location.href = "https://succubook-anna.codeanyapp.com/index/";
                                }
                           }); 
                      }); 
                  }
                  else{
                    document.getElementById('status').innerHTML = 'Please log ' +
                    'into this app.';
                  }
            }
       
            function checkLoginState() {
              FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
              });
            }

            window.fbAsyncInit = function() {
              FB.init({
                appId      : '516847568726103',
                cookie     : true,  // enable cookies to allow the server to access 
                                    // the session
                status: true,
                xfbml      : true,  // parse social plugins on this page
                version    : 'v3.2' // use graph api version 2.8
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
       
            
        </script>
			

			<div id="status">
			</div>

			
    
		<!-- Header -->
			<header id="header">		
				
				<div class="topnav" id="myTopnav">
				<nav>	
					    <a href="./index/index.php">首頁</a>
						<!--
						<a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/index.php">Q&A</a>
						-->
						<!--<li><a href="http://120.110.112.177:1660/AnalysisOfPlants/befanaysisOfPlantsore/index.php#contact">Contact</a></li>-->			
						<!--<li><a href="http://120.110.112.177:1660/AnalysisOfPlants/anaysisOfPlants/warn.php">Album</a></li>-->
		                <a href="./logIn.php">登入/註冊</a>
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
					
						<form name="form1" method="post" action="checklogin.php">
							<div class="field"><input type="email" name="email" placeholder="請輸入信箱" required></div>
							<div class="field"></div>
							<div class="field"><input type="password" name="password" placeholder="請輸入密碼" required></div>
							<div class="field"></div>
                
								<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
								
                <div
                    class="fb-login-button"
                    data-max-rows="1"
                    data-size="<medium, large>"
                    data-button-type="continue_with"
                    data-width="<100% or px>"
                    data-scope="<comma separated list of permissions, e.g. public_profile, email>"
                ></div>
              
							<div class="field">還沒有帳戶嗎?立即<a href="register.php">註冊</a></div>


              <div id="status">   
             
              
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