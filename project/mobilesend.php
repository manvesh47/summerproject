<?php 
include_once("sms-mess.php");
$pwd = $_GET['Pwd'];
$mob = $_GET['mobile'];
$uidValue = $_GET['userid'];
 $resp=SendSMS($mob,"User id:".$uidValue." and password:".$pwd);




?>