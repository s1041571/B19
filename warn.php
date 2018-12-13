<?php

	echo '<meta charset="utf-8"> <center><h1><br><br>';
	echo "請先登入";
	echo '<br><br>';
	echo "即將幫您跳頁至登入畫面";
	echo '</h1></center>';

	header("Refresh:0.5; url= https://succubook-anna.codeanyapp.com/logIn.php");

?>