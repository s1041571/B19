<?php
	//error_reporting(0);

	session_start();

	$result = "";$email = "";$password = "";$name = "";$birthday = "";$career = "";$enabled = "";$year = "";$month = "";$day = "";
	$random = "";

	if(isset($_POST['Submit'])){
		$email = $_POST['email'];
		$password = md5($_POST['password1']."DC");

		$name = $_POST['name'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$day = $_POST['day'];
		$birthday = $year."/".$month."/".$day;
		$career = $_POST['career'];
		$enabled = 1;  //信箱是否啟用 0為未啟用 1為啟用
		$random = rand();
		$_SESSION['random']=$random;


		$db = mysqli_connect("localhost","root","");
		mysqli_set_charset($db,"utf8");
	  mysqli_select_db($db, "dreamcreator");

	  $sql2 = "SELECT random FROM customer_information WHERE random ='" . $random."'";

	  while(mysqli_fetch_assoc(mysqli_query($db, $sql2)) == true){
      	$random = rand();
	    	$sql2 = "SELECT random FROM customer_information WHERE random ='" . $random."'";
	  }
	  $_SESSION['random'] = $random;

	  $sql = "INSERT INTO customer_information (email, password, name, birthday, career,enabled, random)VALUES ('$email', '$password', '$name', '$birthday', '$career','$enabled', '$random')" ;

    $sql1 = "SELECT email FROM customer_information WHERE email ='" . $email."'";
      	
    if(mysqli_fetch_assoc(mysqli_query($db, $sql1)) == true){
         //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
         echo "信箱已註冊";

    }else{
        if (mysqli_query($db, $sql)) {
            echo "New record created successfully";
            header("Refresh:0.7; url= https://succubook-anna.codeanyapp.com/succushare/");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

?>