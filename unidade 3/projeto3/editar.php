<?php 
    include"cabecalho.php";

    $id = $_GET["id"];

    $sql = "select * from aluno where idaluno=".$id;

    include"conexao.php";

    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($result);
?>
<h1>Atualizar Cadastro</h1>
<hr>
<form action="atualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["idaluno"];?>"> <br/>
    Nome: <br/>
    <input type="text" name="nome" value="<?php echo $row["nome"];?>"> <br/>
    Nascimento: <br/>
    <input type="date" name="nascimento" style="width:189px; height:30px;" value="<?php echo $row["nascimento"];?>"> <br/>
    Sexo: <br/>
    <select name="sexo" style="width:189px; height:30px;">
        <option value="<?php echo $row["sexo"];?>">Masculino</option> 
        <option value="<?php echo $row["sexo"];?>">Feminino</option> 
        <option value="<?php echo $row["sexo"];?>">Outro</option>  
    </select> <br/>
    Telefone: <br/>
    <input type="text" name="telefone" value="<?php echo $row["telefone"];?>"> <br/>
    Endereço: <br/>
    <input type="text" name="endereco" value="<?php echo $row["endereco"];?>"> <br/>
    Curso: <br/>
    <input type="text" name="curso" value="<?php echo $row["curso"];?>"> <br/> <br/>
    <input type="submit" value="Atualizar">
</form>