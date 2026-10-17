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

		$comando= "insert into requerimentos (ra, cpf, nome, tipoDeRequerimento, curso, disciplina, numeroDoRequerimento, anoDisciplina,data,status)values (".$ra." , '".$cpf."' , '".$nome."' , 'Cursar Dependência', '".$_POST['curso']."' , '".$_POST['disciplina']."' , ".$req.", '".$_POST['ano']."','".$data."', 2)";

		$conn->query($comando);
	 	
	

	
		//REDIRECIONA PARA A PAGINA INICIAL REPORTANDO O ERRO
		echo"<script language='javascript' type='text/javascript'>;window.location.href='feedbackusuario.PHP';</script>";
				
				
		die();
		  		 
    
?>