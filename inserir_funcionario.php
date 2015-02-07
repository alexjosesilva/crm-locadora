<?php
    //acesso ao banco
    include 'conexao.php';
    
		
    //dados do filme a ser inserido
    $nome 		=	$_REQUEST['nome'];
	$estado		=	$_REQUEST['estado'];
	$salario	=	$_REQUEST['salario'];
	$email		=	$_REQUEST['email'];
	$senha		=	$_REQUEST['senha'];
	$codigo		=	"DEFAULT";


	//query
	$query = "INSERT INTO `popcorntv`.`funcionario`(`codigo`,`nome`,`estado`,`salario`,`email`,`senha`)
VALUES (".$codigo.",'".$nome."',".$estado.",'".$salario."','".$email."','".$senha."')";
	
	$resultado = mysql_query($query,$con) or die ("erro em inserir no banco!".mysql_error());
	var_dump($resultado);
	header('Location:funcionario.php');
	
?>