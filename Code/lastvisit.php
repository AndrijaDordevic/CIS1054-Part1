<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Visit</title>
    <link rel="stylesheet" href="styles.css">
    <li><a href="index.php">Back to main menu</a></li>
</head>
<body>
    <div class="container">
        <?php
        if (!isset($_SESSION['first_visit'])) {
            $_SESSION['first_visit'] = time();
            echo "<p class='welcome'>Welcome to the page!</p>";
        } else {
            $seconds_ago = time() - $_SESSION['first_visit'];
            echo "<p class='visit'>You first used this page $seconds_ago seconds ago.</p>";
        }
        ?>
    </div>
</body>
</html>
