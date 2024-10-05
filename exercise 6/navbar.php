<?php
include 'header.php';
?>

<nav class="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>

        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>

<main>
    <p>Welcome to the main homepage!</p>
    <p>This is Group 4 from BSIT - 3F taking Integrative Programming</p>
</main>

<?php
include 'footer.php';
?>
