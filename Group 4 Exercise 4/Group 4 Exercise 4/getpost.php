<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GROUP 4 Exercise 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="background"></div>

<?php
$name = $email = $age = $address = "";
$nameErr = $emailErr = $ageErr = $addressErr = "";
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $isValid = false;
    } else {
        $name = clean_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $isValid = false;
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $isValid = false;
    } else {
        $email = clean_input($_POST["email"]);
    }

    if (empty($_POST["age"])) {
        $ageErr = "Age is required";
        $isValid = false;
    } else if (!is_numeric($_POST["age"])) {
        $ageErr = "Age must be a number";
        $isValid = false;
    } else {
        $age = clean_input($_POST["age"]);
    }

    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
        $isValid = false;
    } else {
        $address = clean_input($_POST["address"]);
    }

    if ($isValid) {
    }
}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>">
    <span class="error"><?php echo $nameErr; ?></span>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" value="<?php echo $age; ?>">
    <span class="error"><?php echo $ageErr; ?></span>

    <label for="address">Address:</label>
    <textarea id="address" name="address"><?php echo $address; ?></textarea>
    <span class="error"><?php echo $addressErr; ?></span>

    <button type="submit">Submit</button>
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $isValid): ?>
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="age" value="<?php echo $age; ?>">
        <input type="hidden" name="address" value="<?php echo $address; ?>">
        <button type="submit">Display Information</button>
    </form>
<?php endif; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])) {
    echo "<div class='output-box'>";
    echo "<h2>Information:</h2>";
    echo "<strong>Name:</strong> " . htmlspecialchars($_GET["name"]) . "<br>";
    echo "<strong>Email:</strong> " . htmlspecialchars($_GET["email"]) . "<br>";
    echo "<strong>Age:</strong> " . htmlspecialchars($_GET["age"]) . "<br>";
    echo "<strong>Address:</strong> " . htmlspecialchars($_GET["address"]) . "<br>";
    echo "</div>";
}
?>

</body>
</html>
