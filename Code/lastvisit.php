<?php
  session_start();

  if (!isset($_SESSION['first time'])) {// Checking the session if it is the first time entered by the user
        $_SESSION['first time'] = time();// Setting the time of the session start
        echo "Welcome to this page!";// Showing the user the wecome page welcome page

  } else {// To show the ammount of time passed when useing the website
        $time_elapsed = time() - $_SESSION['first time'];// The total time of the usage of the program. ex:15min
        echo "You used this page the first time " . $time_elapsed . " seconds ago";// Showing the user the time they accessed the website the first time
  }
?>
