<?php

include_once("projectserver.php");

$user = $_GET['uid'];


 $query="INSERT INTO favour VALUES('$user')";

        mysqli_query($conn,$query);


		$msg=mysqli_connect_error();
		if($msg==""){
            
				echo "sign up done".$user;
        }
		else
        {
			echo $msg;
        }







?>