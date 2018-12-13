<?php
//DO NOT ECHO ANYTHING ON THIS PAGE OTHER THAN RESPONSE
//'true' triggers login success
/*ob_start();
include 'config.php';
require 'includes/functions.php';
*/

session_start();

if(isset($_POST['Login'])){

	$username = $_POST['email'];
	//$password = md5($_POST['password']."DC");
	$password = md5($_POST['password']."DC");

	$db = mysqli_connect("localhost","root","");
	mysqli_set_charset($db,"utf8");
	mysqli_select_db($db, "dreamcreator");
  $sql = "SELECT customerID, email, password, enabled FROM customer_information";
	$result=mysqli_query($db,$sql);
	
	$a_bool = FALSE;
	$b_bool = FALSE;
	$c_bool = FALSE;
	$results;
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($row['email'] == $username && !empty($username)){
          $a_bool= true;
          $results=$row['customerID'];

          if($row['password'] == $password && !empty($password)){
            $b_bool= true;
          }

          if($row['enabled'] == 1){
            $c_bool= TRUE;
          }
        }
    }
    if($a_bool==TRUE && $b_bool==TRUE && $c_bool== TRUE){

		  $_SESSION['user_id'] = $results;
      echo "<meta charset='utf-8'> <br><br><h1><center>登入成功</center></h1>";
      header("Refresh:0.7; url= https://succubook-anna.codeanyapp.com/index/");
    }
    else{
      echo "<meta charset='utf-8'> <br><br><h1><center>登入失敗</center></h1>";
      header("Refresh:0.7; url= https://succubook-anna.codeanyapp.com/logIn.php");
    }

    $db->close();
  
  }}

   
?>

