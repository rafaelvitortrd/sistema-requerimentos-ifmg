<?php 
include 'conexao.php';

		$consulta = $conn->query("select max(numeroDoRequerimento) as req from requerimentos;");
		if ($consulta->num_rows > 0) {
			$linha = $consulta->fetch_assoc();
			$req = $linha['req'] + 1;
		}else{
			$req = 1;
		}

		$cpf = $_SESSION['cpf'];
		$nome = $_SESSION['nome'];
		$ra = $_SESSION['ra'];

		date_default_timezone_set('America/Sao_Paulo');
		$data = date('Y-m-d');

		$comando= "insert into requerimentos (ra, cpf, nome, tipoDeRequerimento, numeroDoRequerimento,data)values (".$ra." , '".$cpf."' , '".$nome."' , 'Declaração de matrícula' , ".$req.",'".$data."')";

		$conn->query($comando);
	 	
	

	
		//REDIRECIONA PARA A PAGINA INICIAL REPORTANDO O ERRO
		echo"<script language='javascript' type='text/javascript'>window.location.href='feedbackusuario.php';</script>";
				
				
		die();
		  		 
    
?>