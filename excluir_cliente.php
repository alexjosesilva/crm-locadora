<?php  

	//acesso ao banco
    include 'conexao.php';
    
    //dados do cliente a ser inserido 
	$codigo		=	$_REQUEST['codigo'];
	var_dump($codigo);
	//query
	$query = "DELETE FROM `popcorntv`.`cliente`WHERE cliente.codigo=".$codigo;

	$resultado = mysql_query($query,$con) or die ("erro em excluir dado no banco!");
	header('Location:cliente.php');

?>