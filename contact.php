<?php
/**
 * contact.php — Contact Form PHP Handler
 * SCRUM-24: Server-side form validation and redirect
 *
 * Flow:
 *  1. Accept POST request from #contactForm in index.php
 *  2. Reject non-POST requests immediately (redirect to home)
 *  3. Sanitize all inputs
 *  4. Validate: name (required), email (required + valid format), message (required, min 10 chars)
 *  5. On failure → redirect back to index.php#contact with error flag + repopulate name/email
 *  6. On success → redirect to thank-you.html
 *
 * NOTE: In production, add email sending here (mail() / PHPMailer / SMTP service).
 */

// Reject non-POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// --------------------------------------------------
// 1. Sanitize inputs
// --------------------------------------------------
$name     = trim(htmlspecialchars($_POST['name']     ?? '', ENT_QUOTES, 'UTF-8'));
$email    = trim(htmlspecialchars($_POST['email']    ?? '', ENT_QUOTES, 'UTF-8'));
$business = trim(htmlspecialchars($_POST['business'] ?? '', ENT_QUOTES, 'UTF-8'));
$message  = trim(htmlspecialchars($_POST['message']  ?? '', ENT_QUOTES, 'UTF-8'));

// --------------------------------------------------
// 2. Validate
// --------------------------------------------------
$errors = [];

if (empty($name) || strlen($name) < 2) {
    $errors[] = 'name';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'email';
}

if (empty($message) || strlen($message) < 10) {
    $errors[] = 'message';
}

// --------------------------------------------------
// 3a. Validation failed — redirect back with error flag
// --------------------------------------------------
if (!empty($errors)) {
    $params = http_build_query([
        'error' => 1,
        'name'  => $_POST['name']  ?? '',
        'email' => $_POST['email'] ?? '',
    ]);
    header('Location: index.php?' . $params . '#contact');
    exit;
}

// --------------------------------------------------
// 3b. Success — (production: send email here)
//     Example with PHP mail():
//
//     $to      = 'hello@quickpos.io';
//     $subject = "New inquiry from {$name}";
//     $body    = "Name: {$name}\nEmail: {$email}\nBusiness: {$business}\n\nMessage:\n{$message}";
//     $headers = "From: {$email}\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8";
//     mail($to, $subject, $body, $headers);
// --------------------------------------------------

header('Location: thank-you.html');
exit;
