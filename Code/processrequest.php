<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['age'] = $_POST['age'];
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $_SESSION['username'] = $_GET['username'];
    $_SESSION['age'] = $_GET['age'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameters Stored</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Parameters Stored Successfully!</h1>
        <p>Your parameters have been stored.</p>
        <a href="index.php">Return To Main Page</a>
    </div>
</body>
</html>
