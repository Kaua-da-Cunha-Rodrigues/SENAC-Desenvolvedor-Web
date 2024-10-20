<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $nascimento = $_POST["nascimento"];
    $sexo = $_POST["sexo"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $curso = $_POST["curso"];
    $sql = "update aluno set nome ='".$nome."',nascimento= '".$nascimento."',sexo= '".$sexo."',telefone= '".$telefone."',endereco= '".$endereco."',curso= '".$curso."' where idaluno =".$id;

    include"conexao.php";

    if(mysqli_query($con,$sql)){
        $mensagem = "Atualizado com Sucesso";
    }else{
        $mensagem = "Erro ao atualizar";
    }

    mysqli_close($con);

    echo"<script>
        alert('".$mensagem."');
        location.href='consulta.php';
    </script>";
?>