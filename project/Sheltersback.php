<?php

include_once("projectserver.php");
mail('manveshgill47@gmail.com','','hey wassup');

  $userid = $_POST['userid'];

    echo $userid;
    $cname= $_POST['cname'];
    $cnumber = $_POST['cnumber'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $combo = $_POST['combo'];
    $combo2 = $_POST['combo2'];
    $other = $_POST['other'];
    $org1 = $_FILES['pic1']['name'];
    $org2 = $_FILES['pic2']['name'];
    $org3 = $_FILES['pic3']['name'];
    echo $cname.$city.$address.$cnumber.$combo.$combo2.$org1.$org2.$org3;


    $tmpname1 = $_FILES['pic1']['tmp_name'];
    $tmpname2 = $_FILES['pic2']['tmp_name'];
    $tmpname3 = $_FILES['pic3']['tmp_name'];
    
     move_uploaded_file($tmpname1,"Uploads/".$org1);
     move_uploaded_file($tmpname2,"Uploads/".$org2);
     move_uploaded_file($tmpname3,"Uploads/".$org3);


      $query="INSERT INTO shelter VALUES('$userid','$cname','$cnumber','$address','$city','$combo2','$other','$org1','$org2','$org3','$combo')";
        mysqli_query($conn,$query);
		$msg=mysqli_connect_error();
		if($msg=="")
				echo "Record Inserted Successfullyyyyy";
		else
			echo $msg;
    









?>