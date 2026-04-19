<?php
/**
 * QuickPOS — Contact Form Handler
 * contact.php — Receives POST, validates, redirects.
 *
 * SCRUM-37: PHP Backend Re-wiring
 *
 * Flow:
 *   Valid   → redirect to thank-you.html
 *   Invalid → redirect back to index.php#contact with encoded errors + old values
 */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// --- 1. Collect & sanitise raw input ---
$firstName   = trim(filter_input(INPUT_POST, 'firstName',   FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$lastName    = trim(filter_input(INPUT_POST, 'lastName',    FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$email       = trim(filter_input(INPUT_POST, 'email',       FILTER_SANITIZE_EMAIL)         ?? '');
$companySize = trim(filter_input(INPUT_POST, 'companySize', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$message     = trim(filter_input(INPUT_POST, 'message',     FILTER_SANITIZE_SPECIAL_CHARS) ?? '');

// --- 2. Validate ---
$errors = [];

if ($firstName === '') {
    $errors['firstName'] = 'First name is required.';
} elseif (mb_strlen($firstName) > 80) {
    $errors['firstName'] = 'First name must be 80 characters or fewer.';
}

if ($lastName === '') {
    $errors['lastName'] = 'Last name is required.';
} elseif (mb_strlen($lastName) > 80) {
    $errors['lastName'] = 'Last name must be 80 characters or fewer.';
}

if ($email === '') {
    $errors['email'] = 'Email address is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}

if ($message === '') {
    $errors['message'] = 'Message is required.';
} elseif (mb_strlen($message) < 10) {
    $errors['message'] = 'Message must be at least 10 characters.';
}

// --- 3. On failure: redirect back with encoded state ---
if (!empty($errors)) {
    $old = compact('firstName', 'lastName', 'email', 'companySize', 'message');
    $params = http_build_query([
        'errors' => base64_encode(json_encode($errors)),
        'old'    => base64_encode(json_encode($old)),
    ]);
    header("Location: index.php?{$params}#contact");
    exit;
}

// --- 4. On success: redirect to thank-you ---
header('Location: thank-you.html');
exit;
