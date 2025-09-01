<?php
// Contact form processing
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $service = htmlspecialchars(trim($_POST['service']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($service) || empty($message)) {
        header("Location: home-page.php?error=missing_fields&t=" . time());
        exit();
    }
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: home-page.php?error=invalid_email&t=" . time());
        exit();
    }
    
    // Prepare email content
    $to = "support@zlliq.com";
    $subject = "New Contact Form Submission - " . $service;
    $email_body = "
Name: $name
Email: $email
Service: $service
Message: $message

Submitted: " . date('Y-m-d H:i:s') . "
";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Send email (with error logging for debugging)
    $mail_sent = mail($to, $subject, $email_body, $headers);
    
    // Log the attempt for debugging
    error_log("Contact form submission - Email: $email, Subject: $subject, Mail sent: " . ($mail_sent ? 'Yes' : 'No'));
    
    if ($mail_sent) {
        header("Location: home-page.php?success=1&t=" . time());
    } else {
        // Still redirect to success for user experience, but log the failure
        error_log("Mail function failed for contact form submission");
        header("Location: home-page.php?success=1&t=" . time());
    }
} else {
    header("Location: home-page.php");
}
?>