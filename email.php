<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['msg']);

    // Email details
    $to = "sujalgupta5422@gmail.com"; // Replace with your email
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "'<script><alert>Message sent successfully!</alert></script>'";
    } else {
        echo "'<script><alert>Failed to send the message.</alert></script>'";
    }
}
?>
