<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "harshvipul.1704@gmail.com"; // Change this to your desired email address
    $subject = "New Message from Devbhoomi Garden Estates Website";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $regarding = $_POST["regarding"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Regarding: $regarding\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message";

    mail($to, $subject, $email_content);

    // Redirect back to the contact page or show a success message
    header("Location: contact.html");
    exit;
}
?>
