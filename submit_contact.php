<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // For demonstration purposes, we'll just display the data
    echo "<h1>Thank you, $name!</h1>";
    echo "<p>We have received your message:</p>";
    echo "<blockquote>$message</blockquote>";
    echo "<p>We will contact you at <strong>$email</strong> soon.</p>";

    // In a real-world scenario, you would likely send an email or save this information to a database
} else {
    echo "Invalid request method.";
}
?>
