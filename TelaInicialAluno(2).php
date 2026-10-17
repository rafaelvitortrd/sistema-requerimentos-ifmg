

<!DOCTYPE html>

<html>
	<head>

	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>IFMG - Campus Ouro Branco</title>
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
						position: absolute;
						width: 99%;
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

				<div id="box-3">
					<input  type="submit" class="btn btn-danger" value="Sair"onClick="window.location.href = 'logout.php'">
				</div>

				<br><br><br><br><br><br><br><br>
				
				
				<center><h1>Requerimentos Disponíveis<!--  --></h1></center>
					
				<div id="box-1" class="box">


										
					<button type="buttom" style="width: 200px;"  class="btn btn-default"	onClick="window.location.href = 'CursarDependencia.php'">Cursar Dependência</button> <br>
					<br>
					<button type="buttom" style="width: 200px;"  class="btn btn-default"	onClick="window.location.href = 'SegundaChamada.php'">Segunda Chamada</button> <br>
					<br> 
					<button type="buttom" style="width: 200px;"  class="btn btn-default"	 data-toggle="modal" data-target="#declaracaoMatricula">Declaração de Matrícula</button> <br><br>

					<button type="buttom" style="width: 200px;"  class="btn btn-default"	 data-toggle="modal" data-target="#trancarMatricula">Trancar Matrícula</button> <br>
					<br>
					<button type="buttom" style="width: 200px;"  class="btn btn-default"	 data-toggle="modal" data-target="#diploma">Solicitar Diploma</button> <br>
					<br>
					<button type="buttom" style="width: 200px;"  class="btn btn-default"	 data-toggle="modal" data-target="#historicoEscolar">Solicitar Histórico Escolar</button> <br>
					<br>
					<input style="width: 200px; type="submit" class="btn btn-default" value="Seus Requerimentos" onClick="window.location.href = 'feedbackUsuario.php'"><br><br><br>


					  <div class="modal fade" id="diploma" role="dialog">
					    <div class="modal-dialog modal-sm">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Solicitar Diploma</h4>
					        </div>
					        <div class="modal-body">
					          <p>Deseja mesmo solicitar o diploma?</p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.href = 'solicitarDiplomaBD.php'" >Confirmar</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

					        </div>

					      </div>

					    </div>

					  </div>
					  <div class="modal fade" id="declaracaoMatricula" role="dialog">
					    <div class="modal-dialog modal-sm">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Declaração de matrícula</h4>
					        </div>
					        <div class="modal-body">
					          <p>Deseja mesmo solicitar declaração de matrícula?</p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.href = 'declaracaoMatriculaNoBD.php'" >Confirmar</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

					        </div>

					      </div>

					    </div>

					  </div>
					 <div class="modal fade" id="trancarMatricula" role="dialog">
					    <div class="modal-dialog modal-sm">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Trancamento de matrícula</h4>
					        </div>
					        <div class="modal-body">
					          <p>Deseja mesmo trancar a matrícula?</p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.href = 'trancarMatriculaNoBD.php'" >Confirmar</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

					        </div>

					      </div>

					    </div>

					  </div>
					  <div class="modal fade" id="historicoEscolar" role="dialog">
					    <div class="modal-dialog modal-sm">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Solicitar Histórico Escolar</h4>
					        </div>
					        <div class="modal-body">
					          <p>Deseja mesmo solicitar o histórico escolar?</p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.href = 'solicitarHistoricoNoBD.php'" >Confirmar</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

					        </div>

					      </div>

					    </div>

					  </div> 

					</div>

				</div>
	
			</div>


		</div>

		
	</body>

</html>                                                                                                                     