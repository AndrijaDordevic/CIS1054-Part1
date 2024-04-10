<?php
session_start();

//Define username and password combinations for authentication
$users = [
    'user1' => 'password1',
    'user2' => 'password2'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['action'] == 'signup') {
        //Sign Up
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = filter_var($_POST['password'], FILTER_VALIDATE_INT);
    } elseif ($_POST['action'] == 'login') {
        //Log In
        $username = $_POST['username'];
        $password = $_POST['password']; //Password input from the form
        
        //Check if the provided username and password are correct
        if (array_key_exists($username, $users) && $users[$username] === $password) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
        } else {
            echo "Wrong username or password, please try again";
        }
    }
}

//Redirection to their account after processing
header("Location: parameters_stored.php");

exit();
?>
