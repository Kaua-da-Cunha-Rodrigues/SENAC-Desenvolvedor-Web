<?php include"./cabecalho.php"; ?>

<h1>Cadastrar Cliente</h1>
<hr>
<form action="gravar.php" method="post">
    Nome: <br/>
    <input type="text" name="nome"> <br/> 
    Login: <br/>
    <input type="text" name="login"> <br/>  
    Senha: <br/>
    <input type="password" name="senha"> <br/>  
    Tipo de Perfil: <br/>
    <select name="perfil" style="width:189px; height:30px;">
        <option value="user">Usuário</option>
        <option value="adm">Administrador</option>
    </select> <br/> <br/>
    <input type="submit" value="Cadastrar">  
</form>
<?php include"rodape.php"; ?>

</body>
</html>