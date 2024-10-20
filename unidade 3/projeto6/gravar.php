<?php
    //Armazezar os atributos

        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $quantidade = $_POST["quantidade"];
        $valor = $_POST["valor"];
        $foto = $_FILES["foto"];
        $dtcadastro = date("y-m-d");

    //Abrir conexão com o banco

        include'conexao.php';

    //Verificar o arquivo

        $ext = explode(".",$foto["name"]); 
        $ext = strtolower($ext);
        $ext = $ext[1];
        if($ext != "jpg" && ($ext != "jpeg") && ($ext != "png") && ($ext != "gif")){
            echo "Só aceitamos arquivos de imagem";
        }

    //Modificar o nome 

        $nomefoto = date("YmdHis").rand(0000,9999).".".$ext;

    //Montar a instrução

        $sql = "insert into produtos values(null,'".$nome."','".$descricao."','".$quantidade."','".$valor."','".$nomefoto."','".$dtcadastro."')";

    //Executar a instrução no banco
        
        if(mysqli_query($con,$sql)){
            echo "Cadastrado com Sucesso!";   
            move_uploaded_file($foto["tmp_name"],"./upload/".$nomefoto); 
        }else{
            echo "Erro ao Cadastrar!";
        }

    //Fechar conexão
    echo"<script>
        location.href='cadastro.php';      
    </script>";
    
?>