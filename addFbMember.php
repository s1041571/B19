<?php
	
 error_reporting(0);
 session_start();

	if (isset($_POST['id'])) {
		
      $dbnum=mysqli_connect("localhost","root","","dreamcreator");
      mysqli_query($dbnum, 'SET NAMES utf8');
      mysqli_set_charset($dbnum,"utf8");
    
      $f=TRUE;
      $sql3="SELECT customerID FROM customer_information WHERE email='".$_POST['id']."@facebook.com' ";
      if ($result=mysqli_query($dbnum,$sql3)){
           while ($row=mysqli_fetch_row($result)){
             $f=FALSE;
             $_SESSION['user_id']=$row[0];
             break;
           }
      }

    if($f==TRUE){
        $sql = "INSERT INTO customer_information(name,email,FbLogin) VALUES ('".$_POST['name']."','".$_POST['id']."@facebook.com','1') "; 
        mysqli_query($dbnum,$sql);

        $sql2="SELECT customerID FROM customer_information ORDER BY customerID DESC Limit 1";
        if ($result=mysqli_query($dbnum,$sql2)){
             while ($row=mysqli_fetch_row($result)){
                 $_SESSION['user_id']=$row[0];
             }
        }
        /************************* 加入大頭貼 **********************************/
        $sql5 = "INSERT INTO member(MemberPicture,customerID) VALUES ('customer_picture/person-icon.png','".$_SESSION['user_id']."') ";
        mysqli_query($dbnum,$sql5);
    }
    
		$dbnum->close();
		
	}
?>