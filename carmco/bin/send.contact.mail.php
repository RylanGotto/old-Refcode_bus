<?php
 
$to = 'carmco@shaw.ca';

$email = $_POST['email'];
$name = $_POST['name'];

$subject = $_POST['subject'];
$body = "This is a message from $name\n".$_POST['message'];

$header = "From: $email";

if(mail($to, $subject, $body, $header)){
echo "<script type=\"text/javascript\"> alert('You email has been sent, thank you!')</script>";
}else{
echo "<script type=\"text/javascript\"> alert('Server is busy. Please try again later, thank you!')</script>";
}


?>
