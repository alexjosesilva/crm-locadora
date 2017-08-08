<?php

//acesso ao banco de dados   
$enderecobd = "127.0.0.1:49750";   
$dbname = "localdb";       
                             
//dados do banco             
$usuariobd = "azure";         
$senhabd = "6#vWHD_$";         

//conectar ao banco                                                                                   
$con   = mysql_connect($enderecobd,$usuariobd,$senhabd) or die ("Erro na conexão do Banco de Dados!");

//acessou ao banco dados	                                                 
$selbd = mysql_select_db($dbname,$con) or die ("Erro em selecionar Tabela!");

?>
