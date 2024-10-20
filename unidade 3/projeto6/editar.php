<?php 

    $id = $_GET["id"];

    $sql = "select * from produtos where idproduto=".$id;

    include"conexao.php";

    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($result);
?>
<h1>Atualizar Cadastro</h1>
<hr>
<form action="atualizar.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row["idproduto"];?>"> <br/>
    Nome de Produto: <br/>
    <input type="text" name="nome" value="<?php echo $row["nome"];?>"> <br/>
    Descrição: <br/>
    <input type="text" name="descricao" value="<?php echo $row["descricao"];?>"> <br/>
    Quantidade: <br/>
    <input type="number" name="quantidade" value="<?php echo $row["quantidade"];?>"> <br/>
    Valor Unitário: <br/>
    <input type="number" name="valor" value="<?php echo $row["valor"];?>"> <br/>
    Foto do Produto: <br/>
    <input type="file" name="foto"> <br/> <br/>
    <input type="submit" value="Atualizar">
</form> <br>
<a href="index.php">Voltar</a>