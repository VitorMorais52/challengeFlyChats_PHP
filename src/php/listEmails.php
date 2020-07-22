<?php

include ("conex.php");

    $emails = [];
    $indice = 0;
    $sql = "SELECT * FROM email_address";

    $result = mysqli_query($con, $sql);
    mysqli_close($con);

    while($consulta = mysqli_fetch_array($result)){

        $emails[$indice] = ($consulta["email"]);
        $indice++;
                  
    }
   
       echo json_encode($emails);
        //var_dump($emails);    
?>