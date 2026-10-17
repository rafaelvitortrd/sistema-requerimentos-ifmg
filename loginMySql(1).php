<?php 
	session_start();
	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];

	$servername = "200.18.128.78:3306";

	$username = "reinaldo_rafaelv";

	$password = "reinaldo";

	$dbname = "reinaldo_rafaelvitor";
  $connect = mysql_connect($servername,$username,$password, $dbname);
  
            
      $verifica = mysql_query("SELECT * FROM cadastro WHERE cpf = '".$cpf."' AND senha = '".$senha."';") or die("erro ao selecionar");
	 
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
		  $consulta = "Select nome from cadastro where cpf='" . $cpf."';";
		  $resultado = $connect->query($consulta);
			if ($resultado->num_rows > 0) { 
				$linha = $resultado->fetch_assoc();
				//COLOCA O usuário EM SESSAO
				$_SESSION['nome'] = $linha['nome'];
				$_SESSION['cpf']=$cpf;
				//REDIRECCIONA A PAGINA PARA A PAGINA SECRETA
				header('Location:TelaInicialAluno.php');
			} else { //CASO NÃO COINCIDAM
				//REDIRECIONA PARA A PAGINA INICIAL REPORTANDO O ERRO
				$_SESSION['erro']='Erro';
				header("location: index.php");
			}


		 
          
        }
    
?>