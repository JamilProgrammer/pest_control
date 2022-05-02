<?php
if (isset($_POST['send'])) {
    $to_email = "pcspestkum@gmail.com";
    $subject = "Message from User";
    $body ="\nNAME:".$_POST['name']."\nEMAIL ID:".$_POST['gmail']."\nCONTACT NO:\n".$_POST['number']."\nMESSAGE". $_POST['message'];
    $headers = "From: sender\'s email";
    $mail=mail($to_email, $subject, $body, $headers);
    if($mail) {
       
        echo '<script>alert("Email Was Sent Sucessfully!");</script>';
    } else {
        echo '<script>alert("Email sending failed...");</script>';
        
    }
}
?>