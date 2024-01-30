<?php
header("Access-Control-Allow-Origin: *");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "adnankabbani30@gmail.com";
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message";

    mail($to, $email_subject, $email_body);

    $success_message = "Your message has been sent. Thank you!";
}
?>
