<?php
// Get the current date and time on the server
$serverDateTime = date('Y-m-d H:i:s');

// Output the server date and time

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
        <h1>The current date and time is: </h1>
        <?php echo $serverDateTime; ?>
    </div>
</body>
</html>
