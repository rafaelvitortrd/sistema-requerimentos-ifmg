<!DOCTYPE html>

<html>
<head>
<title>Status do requerimento</title>
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
		margin: 10% 30% 10% 30%;
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
	<center><?php
		session_start();
		echo "Usuário: ".$_SESSION['nome'];
	?></center>
	<div id="box-1" class="box">
		<form action="upload.php" enctype="multipart/form-data">
			<h1>Status do requerimento</h1>
			<br>
			<center><table border="1">
				<tr>
				<td>Tipo Requerimento</td>
				<td>Data</td>
				<td>Responsável</td>
				<td>Status</td>
				</tr>
				<tr>
				<td>Segunda Chamada</td>
				<td>03/06</td>
				<td>Bruno</td>
				<td>Pronto</td>
				</tr>
				<tr>
				<td>Dispensar Disciplina</td>
				<td>06/06</td>
				<td>Bruno</td>
				<td>Em processo</td>
				</tr>
			</table></center>					
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