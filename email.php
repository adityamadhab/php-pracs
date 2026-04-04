<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'adityamadhabborah.adtu@gmail.com';  // Your Gmail
    $mail->Password   = 'bcir nahj kqgt fwhv';             // Use Gmail App Password (not your real password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Email content
    $mail->setFrom('adityamadhabborah.adtu@gmail.com', 'Aditya');
    $mail->addAddress('adityamadhabborah@gmail.com');
    $mail->Subject = 'Test Mail';
    $mail->Body    = 'Hello, this is a test email from PHP!';

    $mail->send();
    echo 'Mail sent successfully!';
} catch (Exception $e) {
    echo "Mail sending failed. Error: {$mail->ErrorInfo}";
}
?>