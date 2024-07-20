<?php
include 'validation.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$validate = sanitizeInput($name, $email, $message);

if($validate){
    session_start();
    $_SESSION['name'] = $name;
    header("location:thankyou.php");
}







?>