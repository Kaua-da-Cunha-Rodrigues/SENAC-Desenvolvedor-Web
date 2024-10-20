<?php 
    session_start();
    session_destroy(); //encerra a sessão e tira os dados da conta

    $mensagem = "Logout efetuado";

    header("location:index.php?mensagem=".$mensagem); //vai pro index e leva a mensagem junto
?>