<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$Room= $_POST['Room'];
$message= $_POST['message'];

$to = "mrakhil42@gmail.com";
$subject = "New Mail From Your Website !";
$txt ="Name                    : ". $name . "\r\nEmail                     : " . $email . "\r\nMobile Number   : " . $number . "\r\nRoom Type           : " . $Room . "\r\nMessage               : " . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>