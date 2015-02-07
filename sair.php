<?php
   //finalizar sessão
    session_destroy();
 
    //Limpar dados
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
 
    //Redireciona para a página de autenticação
    header('location:index.php');
?>