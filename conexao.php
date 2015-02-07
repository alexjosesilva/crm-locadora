<?php

//acesso ao banco de dados   
$enderecobd = "localhost";   
$dbname = "popcorntv";       
                             
//dados do banco             
$usuariobd = "root";         
$senhabd = "123456";         

//conectar ao banco                                                                                   
$con   = mysql_connect($enderecobd,$usuariobd,$senhabd) or die ("Erro na conexão do Banco de Dados!");

//acessou ao banco dados	                                                 
$selbd = mysql_select_db($dbname,$con) or die ("Erro em selecionar Tabela!");

?>