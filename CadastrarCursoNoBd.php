<?php 
include 'conexao.php';



		$nomeCurso = $_POST['nomeCurso'];
		

		$comando= "insert into tbcurso (nomeCurso)values ('".$nomeCurso."')";

		$conn->query($comando);
	 	
	

	
		//REDIRECIONA PARA A PAGINA INICIAL REPORTANDO O ERRO
		echo"<script language='javascript' type='text/javascript'>;window.location.href='TelaInicialSecretario.PHP';</script>";
				
				
		die();
		  		 
    
?>