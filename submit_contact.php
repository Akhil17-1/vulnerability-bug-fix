<?php
session_start();
$errors = array();

// insert config.php
include('config.php');
include('header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
//  $email = $_POST['email'];
//  $message = $_POST['message'];
  $subject = "New Contact Form Submission";
  $to = "example@example.com";
  $body = "Name: ".$name."\nEmail: ".$email."\nMessage: ".$message;
  $headers = "From: ".$email;

  // Output the user input without htmlspecialchars()
  echo "Thank you ".$name." for your feedback.<br>";
//  echo "Email: ".$email."<br>";
//  echo "Message: ".$message."<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
        <title>Submit Contact Form</title>
        <style>
                body {
                        background-color: #f2f2f2;
                        font-family: Arial, sans-serif;
                        font-size: 16px;
                        line-height: 1.5;
                        margin: 0;
                        padding: 0;
                }
                .container {
                        margin: 0 auto;
                        max-width: 800px;
                        padding: 20px;
                }
                h1 {
                        font-size: 28px;
                        font-weight: bold;
                        margin-bottom: 20px;
                        text-align: center;
                }
                p {
                        margin-bottom: 10px;
                        text-align: center;
                }
        </style>
</head>
<body>
        <div class="container">
                <h1>Contact Form Submitted</h1>
                <p>Thank you for your message. We will get back to you as soon as possible.</p>
        </div>
</body>
</html>
