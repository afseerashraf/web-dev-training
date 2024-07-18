<?php

function findValue($array,$value){
    for($i = 0; $i < count($array); $i++){
       if($array[$i] == $value){
        return $array[$i];
       }
    }
    return "No Item";
}

$fruits = ['apple', 'banana', 'orange'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>

       .apple{
        margin: auto;
        height:100px;
        width:100px;
        background-color: red;
       }
       .banana{
        margin: auto;
        height:100px;
        width:100px;
        background-color: yellow;
        color:black;
       }
       .orange{
        margin: auto;
        height:100px;
        width:100px;
        background-color: orange;
        color:black;
       }
       .novalue{
        margin: auto;
        height:100px;
        width:100px;
        background-color: orange;
        color:black;
       }
       .date{
        font-size: 2em;
        animation: fadeIn 1s ease-in-out infinite alternate;
       }
       
    </style>
</head>
<body>
 <header>
 <h1>Fruit shop</h1>

 </header>

 <p class="date">Itams add date <?php echo date('Y-M-D H:i:s') ?></p> 

<div class="apple">
<h3><?php echo findValue($fruits, 'apple') ?> </h3>
</div>

<div class="banana">
<h3><?php echo findValue($fruits, 'banana') ?> </h3>
</div>
<div class="orange">
<h3><?php echo findValue($fruits, 'orange') ?> </h3>
</div>

<div class="novalue">
<h3><?php echo findValue($fruits, 'kiwi') ?> </h3>

</div>



</div>
    
</body>
</html>