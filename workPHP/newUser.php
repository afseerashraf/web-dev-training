<?php
include 'validation.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $validate = sanitizeInput($name, $email, $message);

    if ($validate) {
        session_start();
        $_SESSION['name'] = $name;
        header("location:thankyou.php");
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];
    $validate = sanitizeInput($name, $email, $message);
    if ($validate) {
        echo "<h2 style='color:blue;'>$name</h2>";
        echo "<h2 style='color:blue;'>$email</h2>";
        echo "<h2 style='color:blue;'>$message</h2>";
    }
}
