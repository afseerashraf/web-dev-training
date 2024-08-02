<?php
include "connection.php";
$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$update = "UPDATE users SET name = '$name', mobile = '$mobile', email = '$email' WHERE id = $id";
$updated = $mysql -> query($update);
if($updated){
    header("Location:list.php");
}else{
    echo "failes to update";
}
?>