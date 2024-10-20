<?php
    date_default_timezone_get("America/Sao_Paulo"); //define o fuso horário

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $dtcadastro = date("y-m-d"); //armazena a data

    //2 Abrir conexão com o banco de dados

       include_once'conexao.php'; 

    //3 montar a inscrição de conexão com o banco de dados

        $sql = "insert into cliente values(null,'".$nome."','".$email."','".$telefone."','".$dtcadastro."')";
    //4 Gravar

        if(mysqli_query($con,$sql)){
            $mensagem = "Gravação bem sucedida!";
        }else{
            $mensagem = "Erro de gravação";
        }

    //5 fechar conexão com o banco de dados

        mysqli_close($con);

    //6 redirecionar para a página do index

        echo"<script>
                alert('".$mensagem."');
                location.href='cadastrar.php';      
        </script>";
?>