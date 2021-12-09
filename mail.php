<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];

$to = "alberti.volodymyr@sfk.nau.edu.ua";

$subject = "Mail From Комп'ютерний дизайн";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@sfknau_graphicdesign.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>  