<?php $name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "jamiemillman1992@hotmail.co.uk";
$subject = "Crank Creations contact form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>