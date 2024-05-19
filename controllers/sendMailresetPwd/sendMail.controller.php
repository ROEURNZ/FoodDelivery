<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';
session_start();
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_email'])) {
    $teacherEmail = $_POST["send_email"];
    $pinCode =  random_int(100000, 999999);
    // $teacherMessage = $_POST['teacherMessage'];

    try {
        // Initialize PHPMailer
        $mail = new PHPMailer(true);

        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to
        $mail->Username = 'voeunchanthou26@gmail.com'; // Replace with your SMTP username
        $mail->Password = 'ynfd fqpp yvfe ajvj'; // Replace with your SMTP password

        // Disable SSL certificate verification (optional)
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->setFrom("chanthou.voeun@student.passerellesnumeriques.org", "Foodfast website"); // Update with your website name
        $mail->addAddress($teacherEmail); // Send email to the provided email address
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Join Our Website'; // Subject of the email
        $mail->Body = 'Your verification code: '.$pinCode; // Body of the email

        // Send email
        $mail->send();
        $_SESSION['digit'] = $pinCode;
        $_SESSION['emailChange'] = $teacherEmail;
        header('Location: /digitCode');
    } catch (Exception $e) {
        // Error handling
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
