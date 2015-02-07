<?php
    //acesso ao banco
    include 'conexao.php';
    
    //dados do filme a ser inserido
    $nome 		=	$_REQUEST['nome'];
	$cpf		=	$_REQUEST['cpf'];
	$email		=	$_REQUEST['email'];
	$telefone	=	$_REQUEST['telefone'];
	$endereco	=	$_REQUEST['endereco'];
	$codigo		=	"DEFAULT";

	//query
	$query = "INSERT INTO `popcorntv`.`cliente`(`codigo`,`nome`,`cpf`,`telefone`,`endereco`,`email`)
VALUES (".$codigo.",'".$nome."','".$cpf."','".$telefone."','".$endereco."','".$email."')";
	
		
	$resultado = mysql_query($query,$con) or die ("erro em inserir no banco!!!");	
	header('Location:cliente.php');
	
?>