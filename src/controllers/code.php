<?php
session_start();
include "../config/connectDB.php";
include "mail/PHPMailer/src/PHPMailer.php";
include "mail/PHPMailer/src/Exception.php";
include "mail/PHPMailer/src/OAuth.php";
include "mail/PHPMailer/src/POP3.php";
include "mail/PHPMailer/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['mail']))
{
   if($_POST['gmail'] != null&& $_POST['name'] != null)
   {
    $gmail = $_POST['gmail'];
    $name = $_POST['name'];
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tcong2082@gmail.com';                 // SMTP username
    $mail->Password = 'hktpntwbkmivfoag';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('tcong2082@gmail.com', 'Mailer');
    $mail->addAddress($gmail, 'Công');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body in bold!';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    $_SESSION['message'] = "Đặt đơn thành công";
        header("Location: index.php");
        exit(0);
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
   }
   else
   {
    $_SESSION['message'] = "Bạn đã nhập thiếu thông tin";
        header("Location: thanhtoan.php");
        exit(0);    
   }
}
if(isset($_POST['add_to_cart']))
{
    if(isset($_SESSION['cart']))
    {
        $session_array_id = array_column($_SESSION['cart'], "id");
        if(!in_array($_GET['id'],$session_array_id))
        {
            $session_array = array(
                'id' => $_GET['id'],
                'tour_title' => $_POST['tour_title'],
                'tour_price' => $_POST['tour_price'],
                'tour_img' => $_POST['tour_img'],
                'quantity' => $_POST['quantity']
            );
            $_SESSION['cart'][] = $session_array;
        }
    }
    else
    {
        $session_array = array(
            'id' => $_GET['id'],
            'tour_title' => $_POST['tour_title'],
            'tour_price' => $_POST['tour_price'],
            'tour_img' => $_POST['tour_img'],
            'quantity' => $_POST['quantity']
        );
        $_SESSION['cart'][] = $session_array;
        
    }
    header("Location: /web-tour/src/Pages/cart.php");
        exit(0);
}
?>