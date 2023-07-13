<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  

  // Process the form data (e.g., send email, save to database)

  // Example: Sending an email using the mail() function
  $to = "garyspecial2013@gmail.com";
  $subject = "Asunto:" + $asunto; 
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message! We'll get back to you soon.";
  } else {
    echo "Sorry, something went wrong. Please try again later.";
  }
}
?>
