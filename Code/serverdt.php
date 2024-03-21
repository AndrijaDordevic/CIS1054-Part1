<?php
// Setting the content type 
header('Content-Type: text/plain');

// Get the current date and time on the server
$serverDateTime = date('Y-m-d H:i:s');

// Output the server date and time
echo $serverDateTime;
?>
