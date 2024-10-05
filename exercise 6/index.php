<?php
session_start();

if (isset($_COOKIE['index.php'])) {
    setcookie('index.php', '', time() - 3600, '/'); 
}

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php');
    echo '<div style="text-align: center; margin-top: 50px;">';
    echo '<h1>404 Not Found</h1>';
    echo '<p>The page you are looking for could not be found.</p>';
    echo '<p><a href="login.php" style="color: #4A90E2; text-decoration: none; font-size: 18px;">Go to Login Page</a></p>';
    echo '</div>';
    exit;
}

include 'header.php';
include 'navbar.php';
include 'footer.php';
?>