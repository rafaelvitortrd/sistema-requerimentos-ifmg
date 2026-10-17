
<!DOCTYPE html>

<html>
	<head>
		<title>IFMG - Campus Ouror Branco</title>

		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			.container-principal{
				width: 100%;
				margin: auto;	

				
			}

			#container {
				padding-left:  20px;
				padding-right: 20px;
				margin: 0% 0% 0% 0%;
				display: table-cell;
				text-align: left;
				position: relative;
				width: 100%;
				height: 162px;
				background-color: green;
				padding-top: 2px	
				
				
			}

			.box {
				float: left;
				width: 100px;
				height: 0px;
				
				
			}

			#box-1 {
		 		width:100%;
				padding-top: 0px;
				padding-left:  650px;
				padding-right: 20px;
				margin: 0% 3% 1% 1%;
				text-align: left;
				position: relative;
			}

			#box-2 {
				padding-left: 1050px;
				position: relative;	
			}

			#box-3 {
				padding-left : 170px;
				position: absolute;	
				
			}
			


		</style>
	</head>
	<body>
		
		
			<div class="container-principal">

				<div id="container">
					<h4  style="color:white; font-size:120%; font-weight:normal; padding-left: 150px;" > Instituto Federal de Educação, Ciência e Tecnologia de Minas Gerais  </h4>
					<h1  style="color:white; font-size:350%; font-weight:bold;   padding-left: 150px;"  >Campus Ouro Branco </h1>
					<h3  style="color:white; font-size:120%; font-weight:normal; padding-left: 150px;"  > MINISTÉRIO DA EDUCAÇÃO</h3>
					
					
					<center><h1 style="color:white">Aluno</h1></center>

					<div id="box-1" class="box">
						
						<form action="loginMySql.php" method="post">
							<br><h1>Login</h1>
							Cpf:<br>
							<input class="form-control" style="width: 210px;" placeholder="Digite Seu Cpf" required="required" type="text" name="cpf" value="13922164609" ><br>
							Senha:<br>
							<input class="form-control" style="width: 210px;" placeholder="Digite Sua senha" required="required" type="password" name="senha" value="0210" ><br><br>
							<input type="submit" class="btn btn-primary" type= "submit" value="Confirmar" ><br><br>
							<input type="submit" class="btn btn-warning" value="Logar como Secretário" onClick="window.location.href = 'LoginSecretario.php'">
						</form>
						
					</div>
					<div id="box-2" class="box">
						<form action="insert.php" method="post">
							<h1>Cadastrar</h1>
							<div style="width: 210px;">
								RA (Registro Acadêmico):
								<input class="form-control" required="required" placeholder="Digite Seu Ra" type="text" name="ra" value=""><br>
								Nome completo:<br>
								<input class="form-control" required="required" placeholder="Digite Seu Nome completo" type="text" name="nome" value=""><br>
								E-mail:<br>
								<input class="form-control" required="required" placeholder="Digite Seu E-mail" type="text" name="email" value=""><br>
								Cpf:<br>
								<input class="form-control" required="required" placeholder="Digite Seu Cpf" type="text" name="cpf" value=""><br>
								Senha:<br>
								<input class="form-control" placeholder="Digite Sua senha" required="required" type="password" name="senha" value=""><br>
								Confirmar Senha:
								<input class="form-control" placeholder="Digite Novamente Sua senha" required="required" type="password" name="senha2" value=""><br>
								<center><input  class="btn btn-primary" type="submit" value="Confirmar"></center>
							</div>

						</form>

					</div>

				</div>
					
			</div>
			
			<div id = "box-3">
							
							<img  style="width: 150px; border: 0.1px solid green; " src="logoifob.jpg"  alt="Ifmg">

			</div>
		

	</body>

</html>