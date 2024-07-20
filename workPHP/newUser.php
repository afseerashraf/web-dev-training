<?php



$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)){
    echo "Enter the name";
}else if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    echo "Only letters and white space allowed";
}if(empty($email)){
    echo "Enter the email address";
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email address";
}if(empty($message)){
    echo "Enter the message";
}else if(strlen($message) > 20){
    echo "message should be at least 20 characters";
}
else{ 
    session_start();
    $_SESSION['name'] = $name;
    header("location:thankyou.php");
}





?>