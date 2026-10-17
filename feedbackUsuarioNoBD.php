<?php 
include 'conexao.php';

		$consulta = $conn->query("select count(numeroDoRequerimento) as total from requerimentos where cpf = '".$_SESSION['cpf']."';");
		if ($consulta->num_rows > 0) {
			$linha = $consulta->fetch_assoc();
			$total = $linha['total'];
			
		}

		$consultaTB = $conn -> query("select * from requerimentos where cpf = '".$_SESSION['cpf']."' order by tipoDeRequerimento;")
		
						
		die();
		  		 
    
?>