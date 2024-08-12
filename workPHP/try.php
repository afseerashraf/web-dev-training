<?php
include "connection.php";

$select = "SELECT * FROM users where name = 'salman'";
$result = mysqli_fetch_assoc(($mysql -> query($select)));
echo $result['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H3>USERS </H3>
   
    
</body>
</html>