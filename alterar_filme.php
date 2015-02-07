<?php
	 //acesso ao banco
	 include 'conexao.php';
    
	
	//testa se foi enviado algum dado para esta pagina
    if(isset($_REQUEST['codigo'])){

	$titulo 	=	$_REQUEST['titulofilme'];
	$sinopse	=	$_REQUEST['sinopse'];
	$quantidade =	$_REQUEST['quantidade'];
	$trailer	=	$_REQUEST['trailer'];
	$codigo		=	"DEFAULT";

	//query para atualizar o dado
	$query = "UPDATE `popcorntv`.`filme` SET titulo=".$titulo."', sinopse='".$sinopse."',quantidade='".$quantidade."',trailer='".$trailer."' where codigo=".$codigo;

	$resultado = mysql_query($query,$con) or die ("erro em ATUALIZAR o banco!");
	header('Location:adm.php');
	
    }
	else{//caso não tenha nenhum dado!
		header("Location:adm.php");
	}
	
?>