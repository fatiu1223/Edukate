<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "abdulrahmanmariamafolake@gmail.com";  // 🔁 Put your real email here
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $fullMessage = "You have a new message:\n\n";
    $fullMessage .= "Name: $name\n";
    $fullMessage .= "Email: $email\n";
    $fullMessage .= "Subject: $subject\n";
    $fullMessage .= "Message:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "✅ Message sent successfully!";
    } else {
        echo "❌ Message failed. Please try again.";
    }
}
?>
