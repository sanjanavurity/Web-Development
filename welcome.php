<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Welcome, $username! You have successfully logged in.";
} else {
    // If the session variable is not set, the user is not logged in.
    echo "You are not logged in. Please log in first.";
}
?>
