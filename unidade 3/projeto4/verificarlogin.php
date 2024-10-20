<?php
    //sessão => espaço em memoria no navegador

    session_start(); //utilizamos a sessão para evitar ter que stastar o banco de dados toda hora e cada página
    
    //Resgatar da tela o login e senha
    $login = $_POST["login"];
    

    //criptografa a senha digitada para ser comparada com o banco, pois no banco ela estará assim
    $senha = md5($_POST["senha"]); 
      
    
    //Abrir conexão com o banco

    include_once"./conexao.php";

    //montar instrução para ir ao banco verifica se o login existe

    $sql = "select * from usuario where usuario_login = '".$login."' and usuario_senha = '".$senha."'";

    //executar a instrução de seleção na conexão que passamos

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)==1){ 
        $row = mysqli_fetch_array($result);
        $_SESSION["nome"] = $row["nome"];
        $_SESSION["perfil"] = $row["perfil"];
        $_SESSION["tempo"] = time();
        header("location:painel.php");
    }else{
        echo "<script>
                alert('Erro ao logar');
                location.href='index.php';
        </script>"; 
    }