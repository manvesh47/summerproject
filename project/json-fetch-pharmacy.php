<?php

include_once("projectserver.php");
// 0 or more possibility
$city = $_GET["city"];
$query="select * from shop where city='$city'";

$table=mysqli_query($conn,$query);

$ary=array();

	while($record=mysqli_fetch_array($table))//gives a record at a time
	{
		$ary[]=$record;//each record is stored in array
	}

echo json_encode($ary);

?>