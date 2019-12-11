<?php

if($_POST["submit"]) {
    $recipient="moda@clarabarros.com";
    $subject=$_POST["subject"];
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Nome: $sender\nE-mail: $senderEmail\nMensagem: $message";

    mail($recipient, "Website: $subject", $mailBody, "From: $sender <$senderEmail>");
}

?>