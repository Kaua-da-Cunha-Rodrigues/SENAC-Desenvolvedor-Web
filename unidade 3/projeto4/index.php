
<?php include"./cabecalho.php"; ?>
<h3>Área Restrita</h3>
<form action="verificarlogin.php" method="post">
    Login <br/>
    <input type="text" name="login" placeholder="Digite seu Login"/> <br/>
    Senha <br/>
    <!--Um type novo para uso de senhas!-->
    <input type="password" name="senha" placeholder="Digite sua senha"/> <br/>
    <br/>
    <input type="submit" value="Logar">
</form>
<?php
    if(isset($_GET["mensagem"])){
        echo "<br/>".$_GET["mensagem"];
    } //Se a mensagem existir, imprima ela
    ?>
</body>
</html>