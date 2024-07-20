<?php
function sanitizeInput($input,$email, $message){
    if(empty($input)){
        echo "<p style='color:red;'>Enter the name </p>";
    }
    else if(!preg_match("/^[a-zA-Z-' ]*$/",$input)){
        echo "<p style='color:red'>Only letters and white space allowed </p>";
    }
    if(empty($email)){
        echo "<p style='color:red'>Enter the email address</p>";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<p style='color:red'>Invalid email address</p>";
    }
    if(empty($message)){
        echo "<p style='color:red'>Enter the message</p>";
    }else if(strlen($message) > 20){
        echo "<p style='color:red'>message should be at least 20 characters </p>";
    }
    
}

   
    

?>