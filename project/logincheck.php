<?php

include_once("projectserver.php");
session_start();

$uidValue=$_GET['userid2'];
$pwd = $_GET['Pwd2'];

$query="select * from signup where uid='$uidValue'";

$table=mysqli_query($conn,$query);
$count=mysqli_num_rows($table);
if($count==0)
	echo "incorrect username";

else
{
        $_SESSION["active_user"]=$uidValue;
			while($record=mysqli_fetch_array($table))
			{
                $pwd2 = $record["pwd"];
                $combo = $record["type"];
                
			}

    if($pwd2 == $pwd)
    {
       if($combo=="Doctor")
       {
           echo "<meta http-equiv = 'refresh' content = '0; url = doctorform.php' />";
       }
        else if($combo=="Pharmacy")
        {
            echo "<meta http-equiv = 'refresh' content = '0; url = shopplan.php' />";
        }
        else if($combo=="Shetlter")
        {
            echo "<meta http-equiv = 'refresh' content = '0; url = Sheltersform.php' />";
        }
        else if($combo=="Citizen")
        {
            echo "<meta http-equiv = 'refresh' content = '0; url = citizen-page.php' />";
        }
    }
  else
   {
    echo "incorrect password";
    }
}





?>