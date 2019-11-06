<?php

if($_POST["submit"]) {
    $recipient="patysayonara28@gmail.com";
    $subject=$_POST["subject"];
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}

?>