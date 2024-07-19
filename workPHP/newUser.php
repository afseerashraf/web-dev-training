<?php
$username = $_POST['username'];
$password = $_POST['password'];


session_start();
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

header('location:about.php');
?>