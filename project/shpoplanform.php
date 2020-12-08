<?php

include_once("projectserver.php");

 $btn = $_POST['btn'];
  
  if($btn == "insert")
  {
      doinsert($conn);
  }
  else 
  {
      doupdate($conn);
  }
    
function doinsert($conn)
{
    $fname = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $license = $_POST['license'];
    $userid = $_POST['userid'];
    $city = $_POST['city'];
    $orgname = $_FILES['ppic']['name'];
    $tmpname = $_FILES['ppic']['tmp_name'];
    
     move_uploaded_file($tmpname,"Uploads/".$orgname);
       $query="INSERT INTO shop VALUES('$userid','$fname','$mobile','$address','$city','$license','$orgname')";
        mysqli_query($conn,$query);
		$msg=mysqli_connect_error();
		if($msg=="")
				echo "Record Inserted Successfullyyyyy";
		else
			echo $msg;
        
}

function doupdate($conn)
{
    $final = $_POST["hdnbox"];
       $fname = $_POST['fname'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $license = $_POST['license'];
    $userid = $_POST['userid'];
    $city = $_POST['city'];
    $orgname = $_FILES['ppic']['name'];
    $tmpname = $_FILES['ppic']['tmp_name'];
    if($orgname == "")
    {
     $finale = $final;
    }
    else
    {
        $finale = $orgname;
    }
    
     move_uploaded_file($tmpname,"Uploads/".$finale);
    
     $query ="update shop set uid='$userid',fname='$fname',mobile='$mobile',address='$address',city='$city',license='$license',qrpic='$finale' ";   
     mysqli_query($conn,$query);
		$msg=mysqli_connect_error();
		if($msg=="")
				echo "Record Updated Successfullyyyyy";
		else
			echo $msg;
}





?>