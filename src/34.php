<?php
// Initialize session to check user preferences and authentication status
session_start();
if (!isset($_SESSION['user_id'])) {
    die("User not logged in.");
}

// Your PHP code goes here

echo "Welcome, user with ID: ".$_SESSION['user_id'].".";
?>
