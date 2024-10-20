<?php
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $artigo = $_POST["artigo"];
    $foto = $_FILES["foto"]; //array

    //var_dump mostra todo conteúdo de uma variável

    /* Ele mostrará isso:
        array(5) { ["name"]=> string(10) "Brook.jpeg" ["type"]=> string(10) "image/jpeg" ["tmp_name"]=> string(24) "C:\xampp\tmp\phpAD1A.tmp" ["error"]=> int(0) ["size"]=> int(79040) }
    */

    
    //verificar se o arquivo é uma imagem

    $ext = explode(".",$foto["name"]); //pelo que eu entendi, o explode divide a string em várias strings (criando uma array) a partir de um ponto pré-determinado. Nesse caso é o sinal ".";
    // então nesse caso ele fará: $ext = [Brook], [jpeg]

    $ext = $ext[1];
    $ext = strtolower($ext);
    if($ext != "jpg" && ($ext != "jpeg") && ($ext != "png") && ($ext != "gif")){
        echo "Só aceitamos arquivos de imagem";
    }else{
        break;
    }

    //Abrir conexão com banco de dados

    include'conexao.php';

    //modificar o nome para na hora de armazenar a pasta não sobreescrever arquivos de mesmo nome (O banco de dados só vai armazenar o nome da foto, e não o arquivo em si.)

                    //Ano,mês,dia,hora + número randômico até 10000 + $ext
                    //Exemplo: 202212051354109666.jpeg
    $nomefoto = date("YmdHis").rand(0000,9999).".".$ext;

    //montar instrução

    $sql = "insert into artigo values(null,'".$titulo."','".$autor."','".$artigo."','".$nomefoto."');";
    
    //gravar no banco de dados

    if(mysqli_query($con,$sql)){
       $msg = "Gravado com Sucesso";
        //mensagem de que gravou... E mover a imagem para a pasta
        move_uploaded_file($foto["tmp_name"],"./upload/".$nomefoto);
    }else{
        $msg = "Erro ao Gravar";
    }
    echo"<script>
        alert('".$msg."');
        location.href='cadastrar.php';      
    </script>";
    mysqli_close($con);
?>