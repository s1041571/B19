<?php
	
 error_reporting(0);
 session_start();

	if (isset($_POST['id'])) {
		
		$dbnum=mysqli_connect("localhost","root","","dreamcreator");
		mysqli_query($dbnum, 'SET NAMES utf8');
		mysqli_set_charset($dbnum,"utf8");
    
    $sql2="SELECT customerID FROM customer_information WHERE email='".$_POST['name']."@facebook.com'";
    if ($result=mysqli_query($dbnum,$sql2)){
         while ($row=mysqli_fetch_row($result)){
             $_SESSION['user_id']=$row[0];
         }
		}
    
		$dbnum->close();
		
	}
?>