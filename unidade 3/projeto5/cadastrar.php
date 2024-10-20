<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Artigo</title>
</head>
<body>
    <h1>Cadastro</h1>
    <hr>

    <!--O form precisa ser habilitado a enviar arquivo enctype"multipart/form-data -->
    <form action="gravar.php" method="post" enctype="multipart/form-data">
        Título: <br/>
        <input type="text" name="titulo" id="" placeholder="Digite o título do artigo" required="required"> <br/>
        Autor: <br/>
        <input type="text" name="autor" id="" placeholder="Digite o nome do autor" required="required"> <br/>
        Artigo: <br/>
        <textarea name="artigo" id="" cols="30" rows="10" placeholder="Digite aqui..." required="required">Digite Aqui...</textarea>
        <br/>
        Foto: <br/>
        <!-- type pra aceitar arquivos -->
        <input type="file" name="foto" required="required" id=""> <br/> <br/>
        <input type="submit" value="Enviar Artigo">
    </form>
    <br/>
    <a href="index.php">Voltar</a>    
</body>
</html>