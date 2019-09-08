<?php $name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "charles081889@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
echo  "Thank You!" . " -" . "<a href='charles.html'> Return Home</a>";
?>