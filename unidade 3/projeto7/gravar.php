<?php
    $nome = $_POST ["nome"];
    $email = $_POST["email"];
    $admissao = $_POST["admissao"];
    $cargo = $_POST["cargo"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];    


    //validação na segunda camada

    $sinal = true;
    if(!preg_match("/[A-Za-z á-ú]{3,30}/",$nome)){
        $sinal = false;
        $msg = "Preencha o campo de nome corretamente<br/>";
    }
        //[a-z0-9._%]+@[a-z0-9.-]+.[a-z]{2-6}
    if(!preg_match("/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/",$email)){
        $sinal = false;
        $msg = "Preencha o campo de email corretamente";
    }
                    //Só aceita dos números em cada campo de 0 a 9 e 2 dígitos nos dois primeiros campos e 4 no terceiro
    if(!preg_match("/[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/",$admissao)){
        $sinal = false;
        $msg = "Preencha o campo de admissão corretamente<br/>";
    }
    if(!preg_match("/[A-Za-z á-ú]{3,30}/",$cidade)){
        $sinal = false;
        $msg = "Preencha o campo de cidade corretamente<br/>";
    }
    if(!preg_match("/(RJ|SP|ES|MG)$/",$estado)){
        $sinal = false;
        $msg = "Preencha o campo de estado corretamente";
    }
    //preg_match cria uma regra de validação. No caso ele só aceita nomes que comecem de A a Z maiúsculo ou minúsculo, aceita todas as letras acentuadas e deve ter no mínimo 3 letras e no máximo 30. Caso não encaixe nessa regra entra no if

    if($sinal == true){
        //Armazenar no bd
        include_once "conexao.php";
        $sql ="select * from funcionario where email ='".$email."'";
        $emailexistente = mysqli_query($con,$sql);

        if(mysqli_num_rows($emailexistente) > 0){
            $sinal = false;
            $msg = "Email já cadastrado";
        }

        if($sinal == true){
            $sql = "insert into funcionario values(null,'".$nome."','".$email."','".$admissao."','".$cargo."')";
            if(mysqli_query($con,$sql)){
                //Buscar o ID que o banco acabou de gerar
                $idfuncionario = mysqli_insert_id($con); //Esse comando vai na base de dados e pega o último id gerado
                $sql = "insert into endereco values(null,'".$cidade."','".$estado."','".$idfuncionario."')";
                if(mysqli_query($con,$sql)){
                    $msg = "Gravado com sucesso!";
                }else{
                    $msg = "Não foi possível cadastrar o funcionário";    
                }
            }else{
                $msg = "Não foi possível cadastrar o funcionário";
            }  
            echo"<script>
            alert('".$msg."');
            location.href='index.php';
            </script>";
        }
    }else{
        echo"<script>
            alert('".$msg."');
            location.href='index.php';
        </script>";
    }
    
?>