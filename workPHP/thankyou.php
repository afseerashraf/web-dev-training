<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            text-decoration: none;
        }
        h1{
            text-align: center;
        }
        button{
            height: 50px;
            width: 100px;
            margin-left: 300px;
        }
        
    </style>
</head>
<body>
    <h1>Thank's <?php echo strtoupper( $_SESSION['name'] );?></h1>
    <button><a href="index.php">Contact</a></button>
</body>
</html>