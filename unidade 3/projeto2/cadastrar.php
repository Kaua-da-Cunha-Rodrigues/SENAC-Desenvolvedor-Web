<!--Chama o arquivo cabecalho, chamando o bootstrap da página-->
<!--Isso evita que tenha que se repetir o mesmo código em cada arquivo-->
<?php include_once'./cabecalho.php'?> 
<h1>Cadastrar</h1>
<hr>
<form action="gravar.php" method="post">
    Nome: <br>
    <input type="text" name="nome"> <br>
    Email: <br>
    <input type="text" name="email"> <br>
    Telefone: <br>
    <input type="text" name="telefone"> <br>   
    <input type="submit" value="Cadastrar">
</form>   
<?php include_once'rodape.php'?>  
</body>
</html>