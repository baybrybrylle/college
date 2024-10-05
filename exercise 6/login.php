<?php
session_start();

$validUsername = 'admin';
$validPassword = 'password123';

if (isset($_COOKIE['login.php'])) {
    setcookie('login.php', '', time() - 3600, '/'); 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $validUsername && $password == $validPassword) {
        $_SESSION['user'] = $username;
        header('Location: navbar.php');
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>

        <form method="post" action="login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <div class="extra-links">
            <p><a href="#">Forgot Password?</a></p>
        </div>
    </div>
</body>
</html>
