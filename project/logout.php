<?php 


include_once("projectserver.php");
session_start();
session_destroy();
header("location:index.php");
exit();



?>