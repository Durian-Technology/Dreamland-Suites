<?php

//error_reporting(0);var_dump($_POST);
$inputName = $_POST[fname]." ".$_POST[lname];
$from = 'reservations@dreamlandsuites.com';
$sender = $_POST[email];
$guest = $_POST[guest];
$type = $_POST[type];
$checkindate = $_POST[checkindate];
$subject = "Reservation Details for Dreamland Suites by ".$inputName;
$checkoutdate = $_POST[checkoutdate];
$phone = $_POST[phone];

//echo "$inputName<br>$inputEmail<br>$inputPhone<br>$inputCompany<br>$inputSubject<br>$inputMessage";

$to = 'reservation.dreamlandsuites@gmail.com';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Compose a simple HTML email message

$message = '<html><body>';
$message .= 'Name: ' . $inputName . "<br><br>";
$message .= 'Email: ' . $sender . "<br><br>";
$message .= 'Phone: '.$phone. "<br><br>";
$message .= 'Room Type: ' . $type . "<br><br>";
$message .= 'Number of Guest(s): ' .$guest . "<br><br>";
$message .= 'Check-In Date: '.$checkindate. "<br><br>";
$message .= 'Check-Out date: '.$checkoutdate. "<br><br>";
$message .= '</body></html>';

// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Reservation Successful. Please make payment at the reception before check in';//.");location.href='index.html';</script>';
} else{

    echo 'Unable to send email. Please try again.';

}
?>