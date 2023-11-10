<?php

if(isset($_POST['submit'])){
    // message from
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $org    = $_POST['org'];

    $to     = "sales@emokshallc.com";
    $subject = "Form Submission | Landing Page | 15th Nov Event";
    $message = "<p>Enquiry</p></br>";
    $message .= "<p> name: <strong>". $name ."</strong></p></br>";
    $message .= "<p> email: <strong>". $email ."</strong></p></br>";
    $message .= "<p> Organization Name: <strong>". $org ."</strong></p></br>";
    $message .= "<p>Thank you,</p>";

    $headers = "From:" . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);
    // echo $name . " " . $email . " " . $org . " - " . $to;

    header("location:index.html?msg=success");
}
?>