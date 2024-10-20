<?php
    //Pegar os dados

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone "];
    $id = $_POST["id"];

    //abrir conexão com o banco

    include"conexao.php";

    // montar a instrução de atualização

    $sql = "update cliente set nome ='".$nome."',email= '".$email."',telefone= '".$telefone."' where idcliente =".$id;

    //executar a instrução de atualização

    if(mysqli_query($con,$sql)){
        $mensagem = "Atualização bem sucedida!";
    }else{
        $mensagem = "Erro ao atualizar";
    }

    //fechar conexão

    mysqli_close($con);

    //Redirecionar para a página

    echo"<script>
                alert('".$mensagem."');
                location.href='consulta.php';      
        </script>";
?>