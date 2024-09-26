<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = [];

    // Validate name
    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    }

    // Validate email
    if (empty($email)) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid Format.';
    }

    // Validate password
    if (empty($password)) {
        $errors['password'] = 'Password is required.';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'Password must be at least 8 characters long.';
    }

    // If there are errors, return them
    if (!empty($errors)) {
        echo json_encode(['errors' => $errors]);
    } else {
        // No errors - return success message
        echo json_encode(['success' => 'Form submitted successfully!']);
    }
}
