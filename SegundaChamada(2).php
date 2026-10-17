<!DOCTYPE html>

<html>
	<head> 

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>Solicitação de segunda chamada</title>
		
	<style>
		.container-principal{
			width: 100%;
			margin: auto;		
			
		}

		#container {
			padding-left:  20px;
			padding-right: 0px;
			margin: 0% 0% 0% 0%;
			display: table-cell;
			text-align: left;
			position: absolute;
			width: 98.9%;
			height: 162px;
			background-color: green;
			
			
			
		}

		.box {
			float: left;
			width: 100px;
			height: 50px;
			
			
		}

		#box-1 {

			width:99%;
			padding-top: 30px;
			padding-left:  0px;
			padding-right: 20px;
			margin: 0% 0% 1% 1%;
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
		#box-4 {
				padding-left : 170px;
				position: absolute;	
				padding-top: 163px;
				
		}

		#box-5 {
			padding-left : 17px;
			position: absolute;	
			padding-top: 0px;
		}
						
		
		

		


	</style>
	</head>
	<body>
		
			
		<div class="container-principal">
			<div id="container">
					<div id="box-5">
					<h4  style="color:white; font-size:120%; font-weight:normal; padding-left: 150px;" > Instituto Federal de Educação, Ciência e Tecnologia de Minas Gerais  </h4>
					<h1  style="color:white; font-size:350%; font-weight:bold;   padding-left: 150px;"  >Campus Ouro Branco </h1>
					<h3  style="color:white; font-size:120%; font-weight:normal; padding-left: 150px;"  > MINISTÉRIO DA EDUCAÇÃO</h3>
				</div>

				<div id="box-2">
							
					<h3 ><span style="color:white">
						<center><?php
								session_start();
								echo "Usuário: ".$_SESSION['nome']." <br> <br> ";
								echo "Cpf: ".$_SESSION['cpf'];
									
							?></center>	
						</span>
					</h3>	
							
									
												
				</div>
						
				<div id = "box-4">
											
					<img  style="width: 150px; border: 0.1px solid green; " src="logoifob.jpg"  alt="Ifmg">

				</div>

				<br><br><br><br><br><br><br><br>
				
							
				<div id="box-1" class="box">
					<form action="uploads.php" method="post" enctype="multipart/form-data">
						<h1>Segunda chamada</h1>
						<br>
						<br>
						<center><input  class="btn btn-default" type="file" name="fileToUpload" id="fileToUpload"></center><br><br><br>
						<input class="btn btn-default" type="submit" value="Enviar Anexo" name="submit">		
					</form>
					<br>
					<br>
					<br>
					<center><input type="submit"  class="btn btn-danger" value="Voltar" onClick="window.location.href = 'TelaInicialAluno.php'"><br></center>
					<br>
					
				</div>

			</div>

		</div>
		
		<div id = "box-3">
							
			<input  type="submit" class="btn btn-danger" value="Sair"onClick="window.location.href = 'logout.php'">

		</div>
		


	</body>

</html>