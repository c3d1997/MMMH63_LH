<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Load composer's autoloader
    require '../vendor/autoload.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        // $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

        $mail->SMTPAuth = true;  
        $mail->CharSet = 'UTF-8'; 
        $mail->Encoding = "base64";                            // Enable SMTP authentication
        $mail->Username = 'littlehouse6302@gmail.com';                 // SMTP username
        // $mail->Username = 'littlehouse6302@outlook.com';
        $mail->Password = 'fryamvueqpremrdn';                           // SMTP password
        // $mail->Password = 'mmmh6302@'; 
        $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted

        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('littlehouse6302@gmail.com', 'Little House');
        $mail->addAddress('littlehouse6302@gmail.com', 'Little prince');     // Add a recipient
        $mail->addAddress('chiying0104@gmail.com', 'Chiying User');               // Name is optional
        $mail->addReplyTo('littlehouse6302@gmail.com', 'Little_house');
        // $mail->addCC('chiying0104@gmail.com');
        // $mail->addBCC('');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Little House 驗證信';
        $mail->Body    = '感謝您的註冊  請輸入此驗證碼註冊 : 11111';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
        // header("Location: ../sign_signup.php");
        exit();
    } catch (Exception $e) {
        // echo 'Message could not be sent.';
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    ?>
</body>

</html>