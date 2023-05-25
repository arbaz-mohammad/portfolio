<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'arbazmohammad117@gmail.com'; // Replace with your email address
  $subject = 'Feedback from Website';
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send email
  mail($to, $subject, $body);

  // Redirect to a thank-you page
  header("Location: thank_you.html");
  exit();
}
?>
