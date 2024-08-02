<?php
include "connection.php";
$name = htmlspecialchars($_POST['name']);
$mobile = htmlspecialchars($_POST['mobile']);
$email = htmlspecialchars($_POST['email']);

$insert = "INSERT INTO users(name, mobile, email) VALUES('$name', '$mobile', '$email')";
$value = $mysql -> query($insert);
if($value){
    header("Location:list.php");
}else{
    echo "Error insertion failed";
}
$mysql->close();
?>