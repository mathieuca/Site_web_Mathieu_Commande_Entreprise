<?php
    

    $name = $_POST["name"];
    $email = $_POST["email"];
    $object = $_POST["object"];
    $message = $_POST["message"];

    require "vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $mail = new PHPMailer(true);
    
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp-relay.sendinblue.com";
    $mail->SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS;
    $mail ->Port =587;

    $mail->Username = "mathieu.cabon3@gmail.com";
    $mail->Password = "tgqaXE7GK3YPsNR0";

    $mail->setFrom($email, $name);
    $mail->addAddress("mathieu.cabon3@gmail.com");

    $mail->Subject = $object;
    $mail->Body = $message;

    $mail->send();

    header("Location: confirmation_email.php");


?>