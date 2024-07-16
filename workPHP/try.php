<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pattern{
            margin-left: 100px;
        }
        .pattern_2{
            margin-top:-94px;
            margin-left: 102px;

        }
    </style>
</head>
<body>
<h1>pattern</h1>
<div class="pattern">
<?php
   
   for($i = 1; $i <= 5; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "AFz";
    }
   
    echo "<br>";
   }
   
?>
</div>
<div class="pattern_2">
<?php
   
   for($i = 1; $i <= 5; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "AFz";
    }
   
    echo "<br>";
   }
   
?>
</div>
    
</body>
</html>