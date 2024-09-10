<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3 - Group 4</title>
</head>
<body> 
<?php

        echo file_get_contents("text.txt");
        echo "<br>";
        echo file_put_contents("text.txt", 'Hello!, Welcome to the test file of Group 4 from BSIT3F!:)');
        echo "<br>";
        echo "File exists";
        echo "<br>";
        print_r(file("text.txt"));
 
?>
</body>
</html>