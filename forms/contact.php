<?php $name = $_POST['NAME'];
$email = $_POST['PHONE'];
$message = $_POST['ADDRESS'];
$formcontent="From: $name \n Address: $message";
$recipient = "vopoindia@gmail.com";
$subject = "MSA - Customer Booking";
$mailheader = "Phone: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
