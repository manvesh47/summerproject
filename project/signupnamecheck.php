<?php


include_once("projectserver.php");

  $uidValue=$_GET["userid"];


$query="select * from signup where uid='$uidValue'";

    $table=mysqli_query($conn,$query);
    $count=mysqli_num_rows($table);
    if($count==0)
	echo "uername available";
    else
        echo "username taken"










?>