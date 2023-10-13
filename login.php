<?php
$password = $_POST['password']; // Get the password entered by the user

// Replace 'your_password' with the actual password you want to use
$correct_password = 'your_password';

if ($password === $correct_password) {
    // Password is correct, redirect to the external website
    header('Location: https://victorrdr.github.io/Working-space/');
    exit();
} else {
    // Password is incorrect, display an error message or redirect to a login error page
    header('Location: login_error.html');
    exit();
}
?>
