<?php
    $id = $_GET["id"];

    echo $id;
    $sql = "delete from aluno where idaluno=".$id;

    include"conexao.php";

    if(mysqli_query($con,$sql)){
        $mensagem = "Excluído com sucesso!";
    }else{
        $mensagem = "Erro ao Excluir";
    }

    mysqli_close($con);

    echo"<script>
        alert('".$mensagem."');
        location.href='consulta.php';     
    </script>";
?>