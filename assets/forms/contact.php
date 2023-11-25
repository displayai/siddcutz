<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set recipient email address (change it to your email)
    $to = "your-email@example.com";

    // Create email headers
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

    // Compose email content
    $email_content = "Name: $name <br>";
    $email_content .= "Email: $email <br>";
    $email_content .= "Subject: $subject <br>";
    $email_content .= "Message: $message <br>";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // Send success response
        echo "success";
    } else {
        // Send error response
        echo "error";
    }
} else {
    // Display error message if accessed directly
    echo "error";
}
?>
