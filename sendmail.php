<?php

require_once './PHPMailer/src/PHPMailer.php';
require_once './PHPMailer/src/Exception.php';
require_once './PHPMailer/src/SMTP.php';

// Retrieve user's email and name from registration form
$email='sb12cse@gmail.com';
$name="nai";
// $email = $_POST['email'];
// $name = $_POST['name'];

// Instantiate PHPMailer object
$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'purni1majahan2@gmail.com';
    $mail->Password   = '*******';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    // Sender and recipient
    $mail->setFrom('purnimajahan2@gmail.com', 'Sohoz Learning');
    $mail->addAddress($email, $name);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Welcome to Sohoz Learning';
    $mail->Body    = 'Dear ' . $name . ',<br><br>Thank you for registering with Sohoz Learning. We look forward to helping you achieve your learning goals.<br><br>Best regards,<br>The Sohoz Learning Team';

    // Send email
    $mail->send();
    echo 'Confirmation email sent successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
