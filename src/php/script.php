<?php

include ("conex.php");

$email = $_POST["email"];

$email = filter_var($email, FILTER_VALIDATE_EMAIL);

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    
    $sql = "INSERT INTO email_address (email) VALUES ('$email')";
   // mysqli_query($con, $sql) or die("Email já cadastrado");
    if(!mysqli_query($con, $sql)){
        echo false;
    }else{
        echo true;
    }
    mysqli_close($con);

} else {
    echo false;
}

?>