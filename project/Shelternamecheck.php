<?php

include_once("projectserver.php");
$uidValue=$_GET["uidName"];

$query="select * from shelter where uid='$uidValue'";

$table=mysqli_query($conn,$query);



$count=mysqli_num_rows($table);
if($count==0)
	echo "Available";

else
	echo "username already taken";



?>