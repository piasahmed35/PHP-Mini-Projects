<?php

$username = "admin";
$password = "1234";

// Input credentials (you can change these to test)
$inputUsername = "admin";
$inputPassword = "1234";

// Check if both username and password match
if ($inputUsername === $username && $inputPassword === $password) {
    echo "Login Successful";
} else {
    echo "Invalid username or password";
}
?>