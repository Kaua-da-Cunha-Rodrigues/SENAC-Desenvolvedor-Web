<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Funcionários</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Sistema de Funcionários</h1>  
    <hr>    
    <a href="#">
        <button type="button" class="btn btn-primary">
        Novo Funcionário
        </button>
    </a>
    <a href="#">
        <button type="button" class="btn btn-danger">    
            Buscar Funcionário
        </button>   
        </a>
    <a href="cadastrocargo.php" id="cargo">
        <button type="button" class="btn btn-warning">Cadastrar Cargo</button>
    </a>
    <div id="tela">
        <form action="gravar.php" method="post">
            <br>
            Nome: <br/>
            <input type="text" name="nome" id="nome"> <br/>
            Email: <br/>
            <input type="text" name="email" id="email"> <br/>
            Adimissão: <br/>
            <input type="text" name="admissao" id="admissao"> <br/>

            Cargo: <br/>
            <?php
                //montar instrução para pegar o cargo
                $sql = "select * from cargo";
                //Abrir conexao
                include'conexao.php';
                //Executar instrução e recebendo o resultado
                $result = mysqli_query($con,$sql);
                //Verifica se tem linha executada (caso tenha, ele faz a ação do if)
                if(mysqli_num_rows($result)){
            ?>
            <select name="cargo">
                <?php
                    //Recebe a variável como um vetor
                    while($row = mysqli_fetch_array($result)){ 
                ?>
                    <!--Imprime a opçção com base nos dados do banco-->
                    <option value="<?php echo $row["idcargo"] ?>"><?php echo $row["nomecargo"] ?></option> 
                <?php 
                    //Fecha o while  
                    } 
                ?>
            </select>
            <?php
                //Fecha o if
                } 
            ?>
            
            <br>
            Cidade: <br/>
            <input type="text" name="cidade" id="cidade"> <br/>
            Estado: <br/>
            <select name="estado" id="estado">
                <option value="">Selecione</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="SP">São Paulo</option>
                <option value="MG">Minas Gerais</option>
                <option value="ES">Espírito Santo</option>
            </select>
            <br/><br/>
            <input type="submit" value="Cadastrar" class="btn btn-success">
        </form>
    </div>
</body>
</html>