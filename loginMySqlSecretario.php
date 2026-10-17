<?php 
include 'conexao.php';
  
      $cpf = $_POST['cpf'];
	  $senha = $_POST['senha'];
	  $SQL = "SELECT * FROM secretario WHERE cpf = '".$cpf."' AND senha = '".$senha."';";
	  $consulta = $conn->query($SQL);
	 if ($consulta->num_rows > 0) {
            	$linha = $consulta->fetch_assoc();
				//COLOCA O usuário EM SESSAO
				$_SESSION['nome'] = $linha['nome'];
				$_SESSION['cpf']=$cpf;
				//$_SESSION['email']=$linha['email'];
				header("location: TelaInicialAluno.php");
				
			} else { //CASO NÃO COINCIDAM
				
				//REDIRECIONA PARA A PAGINA INICIAL REPORTANDO O ERRO
				$_SESSION['erro']='Erro';
		
				echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='INDEX.PHP';</script>";
			die();
		  		 
         
        }
    
?>