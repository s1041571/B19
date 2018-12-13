<?php

session_start();

//$sql2 = "SELECT email FROM customer_information WHERE customerID ='" . $_SESSION['user_id']."'";

$db = mysqli_connect("localhost","root","");
mysqli_set_charset($db,"utf8");
mysqli_select_db($db, "dreamcreator");
//$name = "";
//$comment = "";
//$pictureId = "";
//$customerID = "";

if(isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['comment']) && isset($_SESSION['user_id'])){
  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $pictureId = $_GET['blog'];
  $customerID = $_SESSION['user_id'];
  $sql = "INSERT INTO message (messageUser, messageContent, messageDate, pictureId, customerID) VALUES('$name', '$comment', 'test', '$pictureId', '$customerID')";
  if(mysqli_query($db,$sql)){
    header("Refresh:0.1; url= https://succubook-anna.codeanyapp.com/index/blog-single.php?blog=".$_GET['blog']);
  }
  else{
    echo"It is wrong.";
  }
} 

?>