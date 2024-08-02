<?php
$mysql = new mysqli('localhost', 'root', '', 'phptest');
if ($mysql->connect_errno) {
    echo "Failed to connect to mysql:" . $Mysqli->connect_error;
    exit();
}

?>