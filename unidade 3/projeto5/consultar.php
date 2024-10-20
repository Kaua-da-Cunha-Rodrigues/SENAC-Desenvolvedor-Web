<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Produtos</title>
    <!-- css do bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- javascript do bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tabela de Artigos</h1>
        <hr>
        <?php
            include'conexao.php';
            $sql= "select * from artigo";
            $result = mysqli_query($con,$sql);
            $registrototal = mysqli_num_rows($result);
            if($registrototal > 0){
        ?>
        <table class="table table-striped">
            <tr>
                <tr>Título</tr>
                <td>Autor</td>
                <td>Artigo</td>
                <td>Foto</td>
            </tr>
            <?php
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["titulo"] ?></td>
                <td><?php echo $row["autor"] ?></td>
                <td><?php echo $row["artigo"] ?></td>
                <td><img src="./upload/<?php echo $row['foto']; ?>"></td>
            </tr>
            <?php       
                }
            ?>
        </table>
        <?php
            }
        ?>
    <br/> 
    <a href="index.php">Voltar</a>           
    </div>
</body>