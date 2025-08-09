<?php

// Define some constants
define( "RECIPIENT_NAME", "FashionVogue" );
define( "RECIPIENT_EMAIL", "hello@fashionvogue.org" );

// Read the form values
$success = false;
$userName = isset( $_POST['name'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['name'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$senderPhone = isset( $_POST['phone'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
$userSubject = isset( $_POST['subject'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $userName && $senderEmail && $senderPhone && $userSubject && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $subject = "New contact form submission: " . $userSubject;
  $headers = "From: noreply@fashionvogue.org\r\nReply-To: " . $senderEmail;
  $msgBody = "Name: ". $userName .  "\nEmail: ". $senderEmail . "\nPhone: ". $senderPhone . "\nSubject: ". $userSubject . "\n\nMessage:\n" . $message . "\n";
  $success = mail( $recipient, $subject, $msgBody, $headers );

  //Set Location After Successsfull Submission
  header('Location: contact?message=Success');
}

else{
  //Set Location After Unsuccesssfull Submission
    header('Location: contact?message=Failed');  
}

?>