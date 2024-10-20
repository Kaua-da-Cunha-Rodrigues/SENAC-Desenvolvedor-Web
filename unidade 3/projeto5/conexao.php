<?php
    //Esse jeito é mais utilizado pois facilita manutenção ou troca de servidores, por exemplo
    $localhost = "localhost";
    $user = "root";
    $pass = "";
    $database = "projeto5";
    $con = mysqli_connect($localhost,$user,$pass,$database);
?>