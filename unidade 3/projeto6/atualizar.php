<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $quantidade = $_POST["quantidade"];
    $valor = $_POST["valor"];
    $foto = $_FILES["foto"];

    include"conexao.php";

    /* Tentativa de excluir a foto da pasta
        $sql = "select foto from produtos where idproduto=".$id;
        $result = (mysqli_query($con,$sql));
        $nomeantigo = mysqli_fetch_array($result);
        echo $nomeantigo[0];
    */

    $ext = explode(".",$foto["name"]); 

    $ext = $ext[1];
    $ext = strtolower($ext);
    if($ext != "jpg" && ($ext != "jpeg") && ($ext != "png") && ($ext != "gif")){
            echo "Só aceitamos arquivos de imagem";
    }

    $nomefoto = date("YmdHis").rand(0000,9999).".".$ext;

    /* pt2
        $sqlSelect = $pdo->prepare("SELECT foto FROM produtos WHERE idproduto = :id");
        $sqlSelect->bindValue(":id", $id);
        $sqlSelect->execute();
        $dadosSelect = $sqlSelect->fetchObject();

        if(is_file(".upload/".$nomefoto->foto)){
        unlink(".upload/".$nomefoto->foto);
    };
    */
    
    $sql = "update produtos set nome ='".$nome."',descricao='".$descricao."',quantidade='".$quantidade."',valor='".$valor."',foto='".$nomefoto."' where idproduto =".$id;

    if(mysqli_query($con,$sql)){
        $mensagem = "Atualizado com Sucesso";
        move_uploaded_file($foto["tmp_name"],"./upload/".$nomefoto);
    }else{
        $mensagem = "Erro ao atualizar";
    }

    mysqli_close($con);
    
    
?>