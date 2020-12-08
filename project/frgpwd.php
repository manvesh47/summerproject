<?php

include_once("projectserver.php");
include_once("sms-mess.php");

$name = $_GET['username'];



$query="select * from signup where uid='$name'";

$table=mysqli_query($conn,$query);
$count=mysqli_num_rows($table);
if($count==0)
	echo "incorrect username";

else
{
        
			while($record=mysqli_fetch_array($table))
			{
                $mobile = $record["mobile"];
                $password = $record["pwd"];
            }
    $resp=SendSMS($mobile,"User id:".$name." and password:".$password);
    echo $resp;
    
}







?>