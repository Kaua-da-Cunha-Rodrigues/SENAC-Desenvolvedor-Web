<?php
    $nome = $_POST["nome"];
    $nascimento = $_POST["nascimento"];
    $sexo = $_POST["sexo"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $curso = $_POST["curso"];

    $sql = "insert into aluno values(null,'".$nome."','".$nascimento."','".$sexo."','".$telefone."','".$endereco."','".$curso."')";

    include"conexao.php";

    if(mysqli_query($con,$sql)){
        $mensagem = "Gravado com Sucesso!";
    }else{
        $mensagem = "Erro ao Gravar";
    };

    mysqli_close($con);

    echo"<script>
        alert('".$mensagem."');
        location.href='cadastro.php';      
    </script>";

?>