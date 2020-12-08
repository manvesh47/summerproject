<?php


include_once("projectserver.php");

$uid=$_GET["name"];
$query=" select * from shop where uid='$uid' ";
$table=mysqli_query($conn,$query);

$ary=array();

while($record=mysqli_fetch_array($table))
{
	$ary[]=$record;
}

echo json_encode($ary);






?>