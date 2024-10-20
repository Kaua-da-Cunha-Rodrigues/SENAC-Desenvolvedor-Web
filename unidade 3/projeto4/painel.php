<?php include"./cabecalho.php"; ?>

<?php session_start(); ?>


<h1>Painel do Sistema</h1>
<hr/> <br>
<?php 
echo "Bem vindo(a) ".$_SESSION["nome"]."<br>";  
?>
<br><h3>Menu</h3>
<?php
//Diferenciar menu de usuário e adm de acordo com o perfil da conta

if($_SESSION["perfil"] == "adm"){
    include_once"menu_adm.php";
}else{
    include_once"menu_usuario.php";
}

?>

</div> 
</body> 
</html> 