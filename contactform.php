<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'srimadhuraju@gmail.com'; // Your Gmail email address
        $mail->Password = 'umlpkduhhhajjahi'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('srimadhuraju@gmail.com', 'ARUNA HOSPITAL'); // Your Gmail email and name
        $mail->addAddress('srimadhuraju@gmail.com', 'ARUNA HOSPITAL'); // Recipient's email and name

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from ARUNA HOSPITALm';
        $mail->Body = "
            <h1>New Message</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Successfully Submitted')
        window.location.href='contact.php';
        </SCRIPT>");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If accessed directly without POST data
    echo 'Access Denied';
}
