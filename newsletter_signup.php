<?php
// Newsletter signup processing
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?newsletter_error=invalid_email");
        exit();
    }
    
    // Prepare email content
    $to = "support@zlliq.com";
    $subject = "New Newsletter Subscription";
    $email_body = "
New newsletter subscription:

Email: $email
Subscribed: " . date('Y-m-d H:i:s') . "
";
    
    $headers = "From: noreply@zlliq.com\r\n";
    $headers .= "Reply-To: support@zlliq.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Send notification email
    if (mail($to, $subject, $email_body, $headers)) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?newsletter_success=1");
    } else {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?newsletter_error=send_failed");
    }
} else {
    header("Location: home-page.php");
}
?>