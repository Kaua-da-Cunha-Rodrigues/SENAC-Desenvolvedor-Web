<?php include"./cabecalho.php"; ?>
<h1>Consulta</h1>
<hr>
<?php 
    include"conexao.php";
 
    $sql = "select * from usuario";

    $result = mysqli_query($con,$sql);
    $registrototal = mysqli_num_rows($result);

    if($registrototal > 0){
?>
<table class="table table-striped">
    <tr>
        <td>Nome</td>
        <td>Login</td>
        <td>Senha</td>
        <td>Perfil</td>
    </tr>   
    
    <?php 
        while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $row["nome"]; ?></td>
        <td><?php echo $row["usuario_login"]; ?></td>
        <td><?php echo $row["usuario_senha"]; ?></td>
        <td><?php echo $row["perfil"]; ?></td>
    </tr>
    <?php
        }
    ?>    
</table>
<?php    
    }else{
        echo "Nenhum Registro";
    }
    include"rodape.php";
?>
