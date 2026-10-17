<?php 
include 'conexao.php';
	$consulta = $conn->query("select max(numeroDoRequerimento) as req from requerimentos;");
	 if ($consulta->num_rows > 0) {
		 $linha = $consulta->fetch_assoc();
		$req = $linha['req'] + 1;
	 }else{
		$req = 1;
	 }
	  $ra = $_POST['ra'];
      $nome = $_SESSION['nome'];
	  $cpf = $_SESSION['cpf'];
	  $SQL = "insert into requerimentos (tipoDeRequerimento, ra, cpf,nome, numeroDoRequerimento) values ('Solicitação de matrícula', '".$ra."','".$cpf."','".$nome."',".$req.");";
	  $consulta = $conn->query($SQL);
	 if ($consulta->num_rows > 0) {
            	$linha = $consulta->fetch_assoc();
				//COLOCA O usuário EM SESSAO
				$_SESSION['erro']='Erro';
				echo"<script language='javascript' type='text/javascript'>alert('Erro ao inserir!');window.location.href='trancarMatricula.PHP';</script>";
				
				
				}else { //CASO NÃO COINCIDAM
				
				//REDIRECIONA PARA A PAGINA INICIAL REPORTANDO O ERRO
				echo"<script language='javascript' type='text/javascript'>;window.location.href='feedbackusuario.PHP';</script>";
				
			die();
		  		 
         
        }
    
?>