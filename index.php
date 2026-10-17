
<!DOCTYPE html>

<html>
<head>
<title>Secretaria</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	.container-principal{
		width: 100%;
		margin: auto;
	}

	#container {
		width: 630px;
		height: 500px;
		margin: 3% 30% 3% 30%;
		border: 1px solid green;
		display: table-cell;
		text-align: left;
		position: absolute;
		
		
		
	}

	.box {
		float: left;
		width: 200px;
		height: 280px;
		
		
	}

	#box-1 {
		background-color: white;
		border: 1px solid green;
		padding: 25px;
		margin: 25px;
		width: 215px;
		
	}

	#box-2 {
		background-color: white;
		border: 1px solid green;
		padding: 25px;
		margin: 25px;
		width: 210px;
	}
	



</style>
</head>
<body>
	
	
	<div class="container-principal">
	<div id="container">
	<center><img  src="logoIF.png" alt="Ifmg"></center>
	<div id="box-1" class="box">
		<form action="loginMySql.php" method="post">
			<h1>Login Aluno</h1>
			Cpf:<br>
			<input style="width: 210px;" required="required" type="text" name="cpf" value="" ><br>
			Senha:<br>
			<input style="width: 210px;" required="required" type="pasword" name="senha" value="" ><br><br>
			<center><input type="submit" value="Confirmar" ></center><br><br>
			
		</form>
		<center><input type="submit" value="Logar como Secretário" onClick="window.location.href = 'LoginSecretario.php'"></center>
	</div>
	<div id="box-2" class="box">
		<form action="insert.php" method="post">
			<h1>Cadastrar</h1>
			Cpf:<br>
			<input style="width: 210px;" required="required" type="text" name="cpf" value=""><br>
			Nome completo:<br>
			<input style="width: 210px;" required="required" type="text" name="nome" value=""><br>
			E-mail:<br>
			<input style="width: 210px;" required="required" type="text" name="email" value=""><br>
			Senha:<br>
			<input style="width: 210px;" required="required" type="password" name="senha" value=""><br><br>
			<center><input  type="submit" value="Confirmar"></center>
		</form>
	</div>
	</div>
	</div>

</div>
</body>
</html>