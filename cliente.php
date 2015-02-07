<?php

//LISTA FUNCIONÁRIO //inicia sessão  
session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
     
    //Redireciona para a página de autenticação
    header('location:login.php');
}
                            
//dados do banco e dados sistema
include 'conexao.php';
    
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Popcorn TV</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
		<body>
			<div class="wrapper">
			    <div class="box">
			        <div class="row">
        	
        	
		            <!-- sidebar -->
		            <div class="column col-sm-3" id="sidebar">
		                <a class="logo" href="#"><span>Popcorn TV</span></a>
		                <ul class="nav">
		                    <li class="active">
		                    	<a href="adm.php">Filmes</a>
		                    </li>
		                    <li>
		                    	<a href="cliente.php">Clientes</a>
		                    </li>
		                    <li>
		                    	<a href="funcionario.php">Funcionarios</a>
		                    </li>
		                    <li>
		                    	<a href="sair.php">Sair</a>
		                    </li>
		                </ul>
		                <ul class="nav hidden-xs" id="sidebar-footer">
		                    <li>
		                      <a href="#"><h3>Popcorn TV</h3>Feito para o EAD Pernambuco.</a>
		                    </li>
		                </ul>
		            </div>
	
	
	
	
	
			<!-- main -->
            <div class="column col-sm-9" id="main">
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        <!-- content -->
                        <div class="col-sm-12" id="featured">   
                          <div class="page-header text-muted">Clientes</div>
                          
                          <form class="form-horizontal" action="inserir_cliente.php" method="post">
							<fieldset>
							
							<!-- Form Name -->
							<legend>Incluir Cliente</legend>
							
							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="filme">Nome</label>
							  <div class="controls">
							    <input id="nome" name="nome" type="text" placeholder="Nome do Cliente" />
							    
							  </div>
							</div>
							
							<!-- Text input -->
							<div class="control-group">
							  <label class="control-label" for="sinopse">Endereco</label>
							  <div class="controls">
							    <textarea id="endereco" name="endereco" placeholder="Endereco"></textarea>
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="quantidade">Telefone</label>
							  <div class="controls">
							    <input id="telefone" name="telefone" type="text" placeholder="Telefone" class="input-xxlarge">
							   
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="trailer">CPF</label>
							  <div class="controls">
							    <input id="cpf" name="cpf" type="text" placeholder="CPF" class="input-xxlarge">
							    
							  </div>
							</div>
							
							<!-- Text input-->
							<div class="control-group">
							  <label class="control-label" for="trailer">EMAIL</label>
							  <div class="controls">
							    <input id="email" name="email" type="text" placeholder="email" class="input-xxlarge">
							    
							  </div>
							</div>
							
							
							<!-- Button -->
							<div class="control-group">
							  <label class="control-label" for=""></label>
							  <div class="controls">
							    <input type="submit" class="btn btn-inverse" value="Enviar" />
							  </div>
							</div>
							
							</fieldset>
							</form>
                        </div>
                        
                        <!--/top story-->

                        
                        <div class="col-sm-12" id="stories">  
                          <div class="page-header text-muted divider">
                            Clientes Cadastrados
                          </div>
                        </div>
                        
                        <table class="table table-hover">
                        	<tr>
                        		<th></th>
                        		<th>Clientes</th>
                        		<th></th>
                        		<th></th>
                        	</tr>
                        	
                        	<?php
								                        	
                        	
                        		$query = "select * from cliente";
                        		$dados = mysql_query($query);
								//$linha = mysql_fetch_assoc($dados); // calcula quantos dados retornaram 
								//$total = mysql_num_rows($dados);

								while($linha = mysql_fetch_assoc($dados)){
                        	?>
	                        	<tr>
	                        		<td class="col-md-1"><a class="btn btn-default" href="#" role="button">Alterar</a></td>
	                        		<td class="col-md-6"><?php echo $linha['nome']; ?></td>
	                        		<td class="col-md-1"><a class="btn btn-danger" href="<?php echo "imprimir_cliente.php?codigo=".$linha['codigo']; ?>" role="button">Imprimmir</a></td>
	                        		<td class="col-md-1"><a class="btn btn-danger" href="<?php echo "excluir_cliente.php?codigo=".$linha['codigo']; ?>" role="button">Excluir</a></td>
	                        	</tr>
                        	<?php 
								}
                        	?>
                        	
						</table>
                      
                      	<hr>
                      
                        <a class="btn btn-info" href="<?php echo "imprimir_cliente.php"; ?>" role="button">Imprimir Listagem de Clientes</a>  
                        
                        <hr>
                      
                        <div class="row" id="footer">    
                          <div class="col-sm-6">
                            
                          </div>
                          <div class="col-sm-6">
                            <p>
                            <a href="#" class="pull-right">©Copyright Inc.</a>
                            </p>
                          </div>
                        </div>
                      
                      <hr>
                      
                      <h3 class="text-center">
                      <a href="#" target="ext">EAD Pernambuco</a>
                      </h3>
                        
                      <hr>
                        
                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
          
          
        </div>
    </div>
</div>
		  
		  
		  <!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		   
	</body>
</html>