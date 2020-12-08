<?php

include_once("projectserver.php");

$uid = $_GET['Userid'];
$contact = $_GET['contact'];
$mobile = $_GET['mobile'];
$address = $_GET['address'];
$pet = $_GET['selec'];
$info = $_GET['info'];

 $query="INSERT INTO Sellpet VALUES('$uid','$contact','$mobile','$address','$pet','$info')";

 mysqli_query($conn,$query);


		$msg=mysqli_connect_error();
		if($msg=="")
				echo "sign up done redirecting <meta http-equiv = 'refresh' content = '2; url = citizen-page.php' /> ";
		else
			echo $msg;
    














?>