<?php 
include 'conexao.php';


		$codigoCurso = $_SESSION['codigoCurso'];
		$nomeTurma = $_SESSION['nomeTurma'];
		$nomeCurso = $_SESSION['nomeCurso'];
		

		date_default_timezone_set('America/Sao_Paulo');
		$data = date('Y-m-d');

		$comando= "insert into tbcurso (codigoDoCurso, nomeCurso)values (".$codigoCurso.",".$nomeCurso.")";

		$conn->query($comando);
	 	
	

	
		//REDIRECIONA PARA A PAGINA INICIAL REPORTANDO O ERRO
		echo"<script language='javascript' type='text/javascript'>;window.location.href='TelaInicialSecretario.PHP';</script>";
				
				
		die();
		  		 
    
?>