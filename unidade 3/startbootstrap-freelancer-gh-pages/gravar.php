<?php
    //1 Resgate de dados da tela

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $telefone = $_GET["telefone"];
    $mensagem = $_GET["mensagem"];

    //2 Abrir conexão com o banco de dados
                            //servidor, usuário, senha, banco
    $con = mysqli_connect("localhost","root","","projeto1");
                            //root: usuario local
                            //nosso banco de dados não tem senha
                            //nome do banco de dados (projeto1)

    //3 montar a inscrição de conexão com o banco de dados

    $sql = "insert into contato values(null,'".$nome."','".$email."','".$telefone."','".$mensagem."')";
    
    //4 Gravar

    if(mysqli_query($con, $sql)){
        $msg = "Gravado com sucesso";
    }else{
        $msg = "Erro ao gravar";
    }
    // Esse comando grava. O primeiro dizendo onde será gravado e depois o que será gravado

    //5 fechar conexão com o banco de dados

    mysqli_close($con);

    //6 redirecionar para a página do index

    echo"<script>
        alert('".$msg."');
        location.href='index.html';
    </script>";
?>  