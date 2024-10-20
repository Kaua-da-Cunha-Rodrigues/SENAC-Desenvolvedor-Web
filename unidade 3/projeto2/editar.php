<!--Chama o arquivo cabecalho, chamando o bootstrap da página-->
<!--Isso evita que tenha que se repetir o mesmo código em cada arquivo-->
<?php include_once'./cabecalho.php';?>
<?php
//pega o id do cliente que esta sendo alterado
$id = $_GET["id"];
//abrir conexao com o banco
include_once'./conexao.php';

//montar instrução para ir ao banco
$sql = "select * from cliente where idcliente =".$id;

$result = mysqli_query($con,$sql); //traz os valores do banco de dados em blocos, ou seja, todas as informações juntas

$row = mysqli_fetch_array($result); //Transforma cada valor dentro desse bloco como uma variável única dentro de um vetor
?>

 
<h1>Atualizar Cadastro</h1>
<hr>
<form action="atualizar.php" method="post">
    <!--O type hidden não mostra na tela-->
    <input type="hidden" name="id" id="" value="<?php echo $row["idcliente"];?>"> <br>
    Nome: <br>
    <input type="text" name="nome" id="" value="<?php echo $row["nome"];?>"> <br>
    Email: <br>
    <input type="text" name="email" id="" value="<?php echo $row["email"];?>"> <br>
    Telefone: <br>
    <input type="text" name="telefone" id="" value="<?php echo $row["telefone"];?>"> <br>   
    <input type="submit" value="Atualizar">
</form>   
<?php include_once'rodape.php'?>  
</body>
</html>