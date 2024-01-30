<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Replace with your email address
    $to = "adnankabbani03@gmail.com";
    $subject = "New Contact Form Submission";
    $message_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    // Additional headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request";
}
?>
