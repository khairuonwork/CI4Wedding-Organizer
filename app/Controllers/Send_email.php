<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if (isset($_POST['image'])) {
    $imageData = $_POST['image'];

    // Extract the base64 encoded data from the data URL
    $imageData = explode(',', $imageData)[1];
    $decodedImage = base64_decode($imageData);

    // Save the image to a temporary location
    $tempImagePath = 'temp_image.png';
    file_put_contents($tempImagePath, $decodedImage);
    

    // Set up PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'miraenk7@gmail.com'; // Your Gmail address
        $mail->Password = 'mufd sauw dxrq nnpv'; // Your Gmail app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email settings
        $mail->setFrom('miraenk7@gmail.com', 'Amar');
        $mail->addAddress('khairulammardaffa@gmail.com', 'Daffa'); // Recipient's email address
        $mail->Subject = 'Captured Image';
        $mail->Body = 'Here is the image you captured.';

        // Attach the captured image
        $mail->addAttachment($tempImagePath, 'captured_image.png');

        // Send the email
        if ($mail->send()) {
            echo 'success'; // Send 'success' for AJAX success response
        } else {
            echo 'Failed to send email.';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    // Remove the temporary image file
    unlink($tempImagePath);
}
