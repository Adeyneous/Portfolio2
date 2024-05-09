<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project = $_POST['project'];
    $name = $_POST['name'];
    $company = $_POST['company'];
    $review = $_POST['review'];

    $to = 'TeddyKpoto@email.com';
    $subject = 'New Project Review Submitted';
    $message = "You have received a new review for: $project\n\n" .
               "Name: $name\n" .
               "Company: $company\n\n" .
               "Review:\n$review";

    // To send HTML mail, the Content-type header must be set (optional)
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: webmaster@example.com' . "\r\n"; // Change to a valid address on your domain

    if(mail($to, $subject, $message, $headers)) {
        echo 'Your review has been sent successfully.';
    } else {
        echo 'There was a problem sending your review.';
    }
}
?>
