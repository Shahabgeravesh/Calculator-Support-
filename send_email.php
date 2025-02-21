<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "shahabgeravesh@gmail.com";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    $email_body = "You have received a new message from your Calculator Plus support form.\n\n" .
    "Name: " . $name . "\n" .
    "Email: " . $email . "\n" .
    "Subject: " . $subject . "\n" .
    "Message:\n" . $message;
    
    if (mail($to, "Calculator Plus Support: " . $subject, $email_body, $headers)) {
        header("Location: support.html?status=success");
    } else {
        header("Location: support.html?status=error");
    }
}
?> 