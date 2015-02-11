<?php

	//biblioteca fpdf
	require 'fpdf/fpdf.php';
	require 'conexao.php';
	
	//conectar ao banco
	//mysql_query($con, "SET NAMES 'utf8'");
	
	//funcção para converter caracteres especiais com acentos
	function converte($string){
		return  iconv("UTF-8", "ISO-8859-1",$string);
	}
	//cria um documento PDF
	$fpdf = new FPDF('p','mm','A4');
	
	$fpdf->AddPage(); //adiconar uma página 
	$fpdf->Image('images/marca.png');//figura
	
	//endereco da empresa
	$fpdf->setFont('arial','',12);
	$fpdf->Cell(0,20,"Rua Fulano de Tal, s/n, Bairro Industrial",0,1,'L');
	
	//email para contao
	$fpdf->setFont('arial','',12);
	$fpdf->Cell(0,20,"atendimento@empresa.com.br",0,1,'L');
	
	//dá espaco
	$fpdf->ln(20);
	
	//configura a fonte
	$fpdf->setFont('arial','B',18);
	$fpdf->Cell(0,5,converte("Relatorio"),0,1,'C');
	
	//linha abaixo do Titulo relatorio
	$fpdf->Cell(0,5,"",0,1,'C');
	
	//dá espaco
	$fpdf->ln(20);
	
	//Até aqui é igual para todos...............
	
	if($_GET['opcao']=='1'){//mostrar todos os filmes
	
	//Query: mostrar todos os clientes
	$sql = "SELECT * FROM cliente";
	$dados = mysql_query($sql);
	
	//varrendo o banco atras do dados do filme
	while($linha = mysql_fetch_assoc($dados)){
		
		//configura a fonte Label...........
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(70,20,converte("Nome"),0,0,'L');
	
    	//configura a fonte
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(0,20,$linha['nome'],0,1,'L');
		
		//configura a fonte Label.........
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(70,20,converte("Telefone"),0,0,'L');
	
    	//configura a fonte
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(0,20,$linha['telefone'],0,1,'L');
		
	}//while
	
	}
    elseif ($_GET['opcao']=='2') {
    //relatorio individual pegar o 'id'
			//Query: mostrar todos os filmes
	$sql = "SELECT * FROM filme WHERE codigo=".$_GET['codigo'];
	$dados = mysql_query($sql);
	
	//varrendo o banco atras do dados do filme
	while($linha = mysql_fetch_assoc($dados)){
		
		
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(70,20,converte("Codigo"),0,0,'L');
	
    	//configura a fonte
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(0,20,$linha['codigo'],0,1,'L');
		
		
		//configura a fonte Label...........
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(70,20,converte("Nome"),0,0,'L');
	
    	//configura a fonte
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(0,20,$linha['nome'],0,1,'L');

		//configura a fonte Label............
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(70,20,converte("Telefone"),0,0,'L');
	
    	//configura a fonte
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(0,20,$linha['telefone'],0,1,'L');
		
		//configura a fonte Label............
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(70,20,converte("Endereco"),0,0,'L');
	
    	//configura a fonte
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(0,20,$linha['endereco'],0,1,'L');
		
		//configura a fonte Label.........
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(70,20,converte("Cpf"),0,0,'L');
	
    	//configura a fonte
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(0,20,$linha['cpf'],0,1,'L');
		
		//configura a fonte Label.........
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(70,20,converte("Email"),0,0,'L');
	
    	//configura a fonte
		$fpdf->setFont('arial','B',12);
		$fpdf->Cell(0,20,$linha['email'],0,1,'L');
		
	}//while
	}
		
	
	$fpdf->Output();	
	

?>