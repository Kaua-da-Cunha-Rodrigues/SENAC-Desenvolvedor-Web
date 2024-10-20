<?php include"cabecalho.php" ?>
<h1>Cadastro de Aluno</h1>
<hr>
<form action="gravar.php" method="post">
    Nome: <br/>
    <input type="text" name="nome"> <br/>
    Nascimento: <br/>
    <input type="date" name="nascimento" style="width:189px; height:30px;"> <br/>
    Sexo: <br/>
    <select name="sexo" style="width:189px; height:30px;">
        <option value="Masculino">Masculino</option> 
        <option value="Feminino">Feminino</option> 
        <option value="Outro">Outro</option>  
    </select> <br/>
    Telefone: <br/>
    <input type="number" name="telefone"> <br/>
    Endereço: <br/>
    <input type="text" name="endereco"> <br/>
    Curso: <br/>
    <input type="text" name="curso"> <br/> <br/>
    <input type="submit" value="Cadastrar">
</form>
<?php include"rodape.php" ?>
