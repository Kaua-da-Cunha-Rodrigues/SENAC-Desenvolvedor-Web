<?php include_once'./cabecalho.php'?>

<script>
    function excluir(id){
        if(confirm('Deseja realmente excluir este cliente')){
            location.href="excluir.php?id="+id;
        } //Essa função é utilizada mais pra frente no botão excluir
    }
</script>
<h1>Consulta Aluno</h1>
<hr>
<?php
    //Pegando o nome escolhido

    $nome_escolhido = $_POST["nome_escolhido"];
    //Abrir conexão com o banco
    include_once'./conexao.php';

    //Montando a instrução de buscar todos os clientes
    $sql = "select * from aluno where nome like '%".$nome_escolhido."%';";

    //Executar a instrução no banco

    $result = mysqli_query($con,$sql);
    $totalregistro = mysqli_num_rows($result); //Número de entradas? Talvez...

    echo"Total de registros: ", $totalregistro,"<br><br>";
    if($totalregistro > 0){ //Início do if
?>

<!--HTML-->
<table class="table table-striped"> <!--Essa classe é do boostrap-->
    <tr>
        <td>Nome</td>
        <td>Nascimento</td>
        <td>Sexo</td>
        <td>Telefone</td>
        <td>Endereço</td>
        <td>Curso</td>
        <td>Excluir</td>
        <td>Editar</td>
    </tr>
    <!--FIM HTML-->
    <?php
        while($row = mysqli_fetch_array($result)){ //transforma em uma array
    ?>
    <!--HTML-->
    <tr>
        <td><?php echo$row["nome"]?></td>
        <td><?php echo$row["nascimento"]?></td>
        <td><?php echo$row["sexo"]?></td>
        <td><?php echo$row["telefone"]?></td>
        <td><?php echo$row["endereco"]?></td>
        <td><?php echo$row["curso"]?></td>
        <td>
            <a href="#" onclick="excluir(<?php echo$row ['idaluno']; ?>)"> <!--Passando parâmetro para a função-->
                <button class="btn btn-danger">Excluir</button>
            </a> <!--O "a" não abre outra aba, ele executa a função do onclick--> 
        </td> 
        <td>
            <a href="editar.php?id=<?php echo$row['idaluno']; ?>">
                <button class="btn btn-success">Editar</button>
            </a>          
        </td>
    </tr>
    <!--FIM HTML-->
    <?php
        } //fim do while
    ?>
</table>

<?php
    }else{
        echo"Nenhum registro cadastrado";
    }   //fim do if
?>
<?php include_once'rodape.php'?>    
</body>
</html>