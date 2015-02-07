<?php
    //acesso ao banco
    include 'conexao.php';
    
    //dados do filme a ser inserido
    $titulo 	=	$_REQUEST['titulofilme'];
	$sinopse	=	$_REQUEST['sinopse'];
	$quantidade =	$_REQUEST['quantidade'];
	$trailer	=	$_REQUEST['trailer'];
	$codigo		=	"DEFAULT";

	//query
	$query = "INSERT INTO `popcorntv`.`filme`(`codigo`,`titulo`,`sinopse`,`quantidade`,`trailer`)
VALUES (".$codigo.",'".$titulo."','".$sinopse."','".$quantidade."','".$trailer."')";

	$resultado = mysql_query($query,$con) or die ("erro em inserir no banco!");
	header('Location:adm.php');
	
?>