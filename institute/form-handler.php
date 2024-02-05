<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email information
    $to = "monikadeokar119@gmail.com"; // Change this to your email
    $subject = "New form submission";
    $headers = "From: $email";

    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Oops! Something went wrong.";
    }
} else {
    // If the form is not submitted, redirect to the homepage or display an error message
    echo "There was an error submitting the form.";
}
?>


