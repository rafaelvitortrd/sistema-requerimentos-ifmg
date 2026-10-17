<!DOCTYPE html>

<html>
<head>
<title>Solicitação de segunda chamada</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	.container-principal{
		width: 100%;
		margin: auto;
	}

	#container {
		width: 630px;
		height: 600px;
		margin: 3% 30% 3% 30%;
		border: 1px solid green;
		display: table-cell;
		text-align: left;
		position: absolute;
		
		
		
	}

	.box {
		float: left;
		width: 100px;
		height: 0px;
		
		
	}

	#box-1 {
		background-color: white;
		border: 1px solid green;
		padding: 20px;
		margin: 5% 3% 1% 15%;
		width: 400px;
		height: 320px;
		text-align: center;
	}

	


</style>
</head>
<body>
	
	
	<div class="container-principal">
	<div id="container">
	<center><img  src="logoIF.png" alt="Ifmg"></center>
	<center>
		<?php
			session_start();
			echo "Usuário: ".$_SESSION['nome']." | ";
			echo "Cpf: ".$_SESSION['cpf'];
		?>
	</center>
	<div id="box-1" class="box">
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<h1>Segunda chamada</h1>
				<br>
				<input type="file" name="fileToUpload" id="fileToUpload"><br><br><br>
				<input type="submit" value="Enviar Anexo" name="submit">		
		</form>
		<br>
		<br>
		
		<br>
		<center><input type="submit" value="Voltar" onClick="window.location.href = 'TelaInicialAluno.php'"><br></center>
		<br>
	</div>
	</div>
	</div>

</div>
</body>
</html>