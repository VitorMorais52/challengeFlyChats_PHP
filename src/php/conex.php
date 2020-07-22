<?php

$servername = "localhost";
$database = "flychat";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Falha na conexão: " . mysqli_connect_error());
}
    //echo "Conectado com sucesso\n";

?>

