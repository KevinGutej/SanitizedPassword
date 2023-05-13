<?php
function sanitizePattern($password) {
    $patterns = '/[^a-zA-Z0-9]/';//

    $sanitizedPassword = preg_replace($patterns, '', $password);
    return $sanitizedPassword;
}

$FormPassword = $_POST['password'];//Taking the password from the form

$sanitizedPassword = sanitizePattern($FormPassword);

echo "Your Sanitized password: " . $sanitizedPassword;
?>
