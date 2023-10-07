<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = 'assaadelhamiani12@gmail.com';
$email_subjet = 'New Form Submission';
$email_body = "User Name: $name.\n".
               "User Email: $visitor-email.\".
                "Subject: $subject.\n".
                "User Message: $message.\";
$to ='gslemediateurschool@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: scool.html");
?>
