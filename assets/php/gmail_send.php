<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '/home/pi/vendor/autoload.php';

if(!isset($message_txt)){
    $message_txt="Test Mail";
}
if(!isset($message_html)){
    $message_html="<h1>Test HTML</h1>";
}


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'zng.contact@gmail.com';                 // SMTP username
    $mail->Password = 'zanga_c_a_h';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('zng.contact@gmail.com', 'ZNG Contact');
    $mail->addAddress("lce987@live.fr", "lce987");     // Add a recipient
    $mail->addReplyTo('zng.contact@gmail.com', 'Support EscapeFromZNG');
   
   
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $sujet;
    $mail->Body    = $message_html;
    $mail->AltBody = $message_txt;

    $mail->send();
    echo '<span class="important">Un mail vous a été envoyé il peut se trouver dans votre boite spam</span>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>