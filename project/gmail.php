<?php



$to = "manveshgill47@gmail.com";
$subject = "Response from Beyonce";
$message = "hope you got that joke";
$headers = "From: 19bcs1774@gmail.com";
mail($to,$subject,$message,$headers);
if(mail($to,$subject,$message,$headers))
{
    echo "mail sent succesfully";
    
}
else
{
    echo "Error";
}

?>