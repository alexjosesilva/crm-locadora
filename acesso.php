<?php

include 'conexao.php';

//dados do usuario da sessão
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];

//verificou se há usuairo
$query  = "SELECT * FROM funcionario AS func WHERE func.email='".$email."' AND func.senha='".$senha."'";
$resultado = mysql_query($query,$con) or die("Erro em selecionar Query!");


///Caso consiga logar cria a sessão
if (mysql_num_rows ($resultado) > 0) {
    // session_start inicia a sessão
    session_start();
     
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

	header('location:adm.php');
	
}
 
//Caso contrário redireciona para a página de autenticação
else {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
 
    //Redireciona para a página de autenticação
    header('location:index.php');

     
}


   
?>