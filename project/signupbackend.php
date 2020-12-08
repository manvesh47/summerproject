<?php

include_once("projectserver.php");
include_once("sms-mess.php");

$date = date('Y-m-d H:i:s');
$uidValue=$_GET["userid"];
$mob = $_GET['mobile'];
$pwd = $_GET['Pwd'];
$combo = $_GET['combo'];

        $query="INSERT INTO signup VALUES('$uidValue','$pwd','$mob','$combo','$date')";

        mysqli_query($conn,$query);


		$msg=mysqli_connect_error();
		if($msg==""){
            $resp=SendSMS($mob,"User id:".$uidValue." and password:".$pwd);
				echo "sign up done $resp";
        }
		else
        {
			echo $msg;
        }


?>

