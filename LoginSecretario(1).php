<!DOCTYPE html>

<html>
<head>
<title>Login Secretário</title>
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
	<div id="box-1" class="box">
		<form action="/action_page.php">
			<h1>Login Secretário</h1>
			Cpf:<br>
			<input style="width: 210px;" required="required" type="text" name="cpf" value="" ><br>
			Senha:<br>
			<input style="width: 210px;" required="required" type="pasword" name="Senha" value="" ><br><br>
			<center><input type="submit" value="Confirmar"></center>	
		</form>
		<br>
		<br>
		<br>
		<center><input type="submit" value="Voltar" onClick="window.location.href = 'login.html'"><br></center>
		<br>
	</div>
	</div>
	</div>

</div>
</body>
</html>