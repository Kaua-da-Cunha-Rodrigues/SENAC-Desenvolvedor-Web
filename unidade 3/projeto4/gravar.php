<?php

    //pegar os valores

    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);
    $perfil = $_POST["perfil"];

    //Abrir conexão

    include"conexao.php";

    //montar instrução

    $sql = "insert into usuario values(null,'".$nome."','".$login."','".$senha."','".$perfil."')";

    //executar instrução

    if(mysqli_query($con,$sql)){
        $mensagem = "Gravado com Sucesso";
    }else{
        $mensagem = "Erro ao gravar";
    }

    echo"<script>
            alert('".$mensagem."');
            location.href='cadastro.php';
        </script>";

    //fechar conexão

    mysqli_close($con);
?>