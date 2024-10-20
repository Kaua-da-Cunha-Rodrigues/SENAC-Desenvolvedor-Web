<?php
    $cargo = $_POST["cargo"];

    include_once 'conexao.php';

    $sql = "insert into cargo values(null,'".$cargo."')";
    
    if(mysqli_query($con,$sql)){
        $msg = "Gravado com Sucesso!";
    }else{
        $msg = "Erro ao gravar";
    }
    echo"<script>
            alert('".$msg."');
            location.href='cadastrocargo.php';
        </script>";
?>