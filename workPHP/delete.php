<?php
include "connection.php";
$id = $_GET['id'];
$delete = "DELETE FROM users where id = $id";
$result = $mysql -> query($delete);
if($result){
    header("Location:list.php");
}else{
    echo "Failed to delete user";
}

?>