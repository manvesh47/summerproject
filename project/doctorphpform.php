<?php

include_once("projectserver.php");
    


$btn=$_POST["btn"];


if($btn=="insert")
doSave($conn);
else if($btn=="update"){
		doUpdate($conn);
}
function dosave($conn){
       $fname = $_POST['firstname'];
      
        $email = $_POST['email'];
        $userid = $_POST['userid'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $quali = $_POST['qualification'];
        $spec = $_POST['specalization'];
        $exp = $_POST['experience'];
        $orgname = $_FILES['ppic']['name'];
        $tmpname = $_FILES['ppic']['tmp_name'];
            $orgname2 = $_FILES['cpic']['name'];
        $tmpname2 = $_FILES['cpic']['tmp_name'];
        


         move_uploaded_file($tmpname,"Uploads/".$orgname);
        move_uploaded_file($tmpname2,"Uploads/".$orgname2);

            
    

       $query="INSERT INTO Doctor VALUES('$userid','$fname','$mobile','$email','$address','$state','$city','$quali','$exp','$spec','$orgname','$orgname2')";

        mysqli_query($conn,$query);


		$msg=mysqli_connect_error();
		if($msg=="")
				echo "Record Inserted Successfullyyyyy";
		else
			echo $msg;
        
}

function doUpdate($conn)
{
     $fname = $_POST['firstname'];
       
        $email = $_POST['email'];
        $userid = $_POST['userid'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $quali = $_POST['qualification'];
        $spec = $_POST['specalization'];
        $exp = $_POST['experience'];
        $orgname = $_FILES['ppic']['name'];
        $tmpname = $_FILES['ppic']['tmp_name'];
            $orgname2 = $_FILES['cpic']['name'];
        $tmpname2 = $_FILES['cpic']['tmp_name'];

         $val = $_POST["hdnbox"];
         echo $val;
        $val2 = $_POST["hdnbox2"];
    
        if($orgname == "" && $orgname2 == "")
        {
            $final = $val;
            $final2 = $val2;
        }
        else if($orgname == "")
        {
            $final = $val;
            $final2 = $orgname2;
               move_uploaded_file($tmpname2,"Uploads/".$orgname2);
        }
       else if($orgname2 == "")
       {
           $final = $orgname;
        $final2 = $val2;
            move_uploaded_file($tmpname,"Uploads/".$orgname);
        }
       else
       {
        $final = $orgname;
           $final2 = $orgname2;
           
         move_uploaded_file($tmpname,"Uploads/".$orgname);
        move_uploaded_file($tmpname2,"Uploads/".$orgname2);
           
        }
    
        
          $query="update Doctor set NAME='$fname', mobile='$mobile', email='$email', address='$address', state='$state', city='$city',qualification='$quali', EXP='$exp', spl='$spec', ppic='$final', certpic='$final2' where uid='$userid'" ;
        
           mysqli_query($conn,$query);


		$msg=mysqli_connect_error();
		if($msg=="")
				echo "Record Inserted Successfullyyyyy";
		else
			echo $msg;
        
        
        
    
            
            
    
}
      







?>
