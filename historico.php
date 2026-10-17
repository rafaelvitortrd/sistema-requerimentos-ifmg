<!DOCTYPE html>

<html>
	<head> 

		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


		<title>IFMG - Campus Ouror Branco</title>
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
				margin: 1% 0% 0% 0%;
				display: table-cell;
				text-align: left;
				position: absolute;
				width: 100%;
				height: 162px;
				background-color: green;
				
				
				
			}

			.box {
				float: left;
				width: 100px;
				height: 350px;
				
				
			}

			#box-1 {

				width:99%;
				padding-top: 30px;
				padding-left:  0px;
				padding-right: 20px;
				margin: 0% 3% 1% 1%;
				text-align: center;
			}
			#box-2 {
				width:100%;
				padding-top: 30px;
				text-align: right;
				position: absolute;
			}
			#box-3 {
				width:97%;
				 padding-top: 60px;
				text-align: right;
				position: absolute;
			}
			
			

			


		</style>
	</head>
	<body>

			<div class="container-principal">
				<div id="container">
					<div id="box-2">
						
						
						<h3 ><span style="color:white">
						<center><?php
							session_start();
							echo "Usuário: ".$_SESSION['nome']." <br> <br>";
							echo "Cpf: ".$_SESSION['cpf'];
							
						?></center>	
						</span>
						</h3>
						
									
					</div>
					<div id="box-3">
						<input  type="submit" class="btn btn-danger" value="Sair"onClick="window.location.href = 'logout.php'">
					</div>
					<br>
					<img  src="logoIF.png" alt="Ifmg">
						
						
					<div id="box-1" class="box">
						<form action="upload.php" enctype="multipart/form-data">
							<center><h1>Solicitação de Histórico Escolar</h1></center>
							<br>
							<br>
							
							RA(Registro Acadêmico):     <br>
							<input style="width: 210px;" required="required" type="text" name="ra" value="" ><br><br>
							<center><input type="submit" value="Confirmar" ></center><br><br>			
						</form>
						<br>
						<br>
						
						<br>
						<center><input type="submit"  class="btn btn-danger" value="Voltar" onClick="window.location.href = 'TelaInicialAluno.php'"><br></center>
						<br>
					</div>

				</div>

			</div>

		</div>

	</body>
</html>