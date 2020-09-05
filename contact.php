<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $web = $_POST["web"];
    $message = $_POST["message"];
    $email_from = "iSpark Solutions Limited";
    $email_subject = "New Mail From iSpark Solutions";
    $email_body =   "name: $name.\n".
                    "email: $email.\n".
                    "web: $web.\n".
                    "message: $message. \n";
    $to = 'jbassuquo4@gmail.com';
    $headers = "FROM: $email_from \r\n";
    $headers = "REPLY-TO: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("location: index.html");
?>