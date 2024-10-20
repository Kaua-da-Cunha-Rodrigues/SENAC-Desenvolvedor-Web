<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro</h1>
    <hr>
    <!-- O formulário precisa ser habilitado a aceitar arquivos, então usa-se o enctype="multipart/form-data" -->
    <form action="gravar.php" method="post" enctype="multipart/form-data">
        Nome de Produto: <br/>
        <input type="text" name="nome"> <br/>
        Descrição: <br/>
        <input type="text" name="descricao"> <br/>
        Quantidade: <br/>
        <input type="number" name="quantidade"> <br/>
        Valor Unitário: <br/>
        <input type="number" name="valor"> <br/>
        Foto do Produto: <br/>
        <input type="file" name="foto"> <br/> <br/>
        <input type="submit" value="Cadastrar">
    </form> <br>
    <a href="index.php">Voltar</a>   
</body>
</html>