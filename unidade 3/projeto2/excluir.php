<?php
    //pegar o id de quem será excluido
        $id = $_GET["id"];   
    //fazer conexão com o banco
        include_once'./conexao.php';
    //montar a instrução sql de apagar
        $sql = "delete from cliente where idcliente =".$id;
    //executar no banco de dados a ação
        if(mysqli_query($con,$sql)){
            $mensagem = "Excluido com sucesso";
        }else{
            $mensagem = "Erro ao excluir";
        }
    //fechar conexão com o banco
        mysqli_close($con);
    //retornar para a página
        echo "<script>
                alert('".$mensagem."');
                location.href='consulta.php';
        </script>";
?>