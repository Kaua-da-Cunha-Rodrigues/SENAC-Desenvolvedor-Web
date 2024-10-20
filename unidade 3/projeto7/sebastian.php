<?php
    if ($sinal == true) {
        include_once './conexao.php';
   
        // faremos validação na segunda camada    
        
        // instrução sql para gravar no banco...        
    
        $sql = "select * from funcionario where email = '".$email."'";    
        $resultadoexisteemail = mysqli_query($con,$sql);    
        if(mysqli_num_rows($resultadoexisteemail)>0){    
        $sinal = false;    
        $msg = "E-mail já cadastrado";            
        }            
        if($sinal == true){    
            $sql = "insert into funcionario values (null,'".$nome."','".$email."','".$admissao."','".$cargo."')";                
            if (mysqli_query($con,$sql)){    
            $idfuncionario = mysqli_insert_id($con);    
            $sql1 ="insert into endereco values (null,'".$cidade."','".$estado."','".$idfuncionario."')";    
                if(mysqli_query($con,$sql1)){    
                    $msg = "Funcionario cadastrado com sussesso";    
                }else{   
                    $msg = " Não pode cadastrar o endereço";    
                }    
            }else{    
                $msg = "Não pode cadastrar o funcionario";    
            }                        
        }          
        
    }else{    
        echo $msg;    
        }

--------------------------------------------------

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