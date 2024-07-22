<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'adammas6969@gmail.com';  // Ganti dengan email Anda
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<h2>Contact Request</h2>
             <p><strong>Name:</strong> $name</p>
             <p><strong>Email:</strong> $email</p>
             <p><strong>Subject:</strong> $subject</p>
             <p><strong>Message:</strong><br>$message</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Your message has been sent successfully!';
    } else {
        echo 'There was an error sending your message.';
    }
}
?>
