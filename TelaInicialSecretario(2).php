<!DOCTYPE html>
<?php 
include 'conexao.php';

		

		  		 
?>
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
									
									echo "Usuário: ".$_SESSION['nome']." <br> <br> ";
									echo "Cpf: ".$_SESSION['cpf'];
										
								?></center>	
							</span>
						</h3>	
								
										
													
					</div>
							
					<div id = "box-4">
												
						<img  style="width: 150px; border: 0.1px solid green; " src="logoifob.jpg"  alt="Ifmg">
						<br>
						<br>
						<br>
						<button type="buttom" style="width: 150px;"  class="btn btn-success"	 data-toggle="modal" data-target="#CadastroCurso">Cadastrar Curso</button> <br>
						<br>
						<button type="buttom" style="width: 150px;"  class="btn btn-success"	data-toggle="modal" data-target="#CadastroDisciplina">Cadastrar Disciplina</button> <br>
						<br>
						<button type="buttom" style="width: 150px;"  class="btn btn-success"	data-toggle="modal" data-target="#CadastroSecretario">Cadastrar Secretário</button> <br>
						<br>
						<button type="buttom" style="width: 150px;"  class="btn btn-success"	data-toggle="modal" data-target="#CadastroTurma">Cadastrar Turma</button> <br>
						<br>
						<button type="buttom" style="width: 150px;"  class="btn btn-success"	data-toggle="modal" data-target="#ValidarUsuario">Validar Usuários</button> <br>
						<br>


					</div>

					<div id="box-3">
						<input  type="submit" class="btn btn-danger" value="Sair"onClick="window.location.href = 'logout.php'">
					</div>
					<br><br><br><br><br><br><br><br>
					
							
					<div id="box-1" class="box">
						<form action="upload.php" enctype="multipart/form-data">
							<h1>Requerimentos</h1>
							<br>
							<center><table border="1" style="width: 900px;"class="table table-bordered">
								
								<thead>
									
									<th>Tipo Requerimento</th>
									<th>Data</th>
									<th>Responsável</th>
									<th>Status</th>
									<th>Previsão de entrega</th>
									<th> </th>
																	
								</thead>
								
								<tbody>
									
									<?php

										$result = $conn->query("select * from requerimentos where status = 0  order by status, data desc ;");
										
										if($result-> num_rows > 0){

											
											
											while($row = $result-> fetch_assoc()){

												echo "<tr>";
												echo "<td>".$row['tipoDeRequerimento']."</td>";
												echo "<td>". date('d/m/Y', strtotime('+0 days', strtotime($row['data'])))."</td>";
												echo "<td>".$row['responsavel']."</td>";
												if($row['status'] == 0){
													echo "<td>"."Em Espera"."</td>";
												} else {
													if($row['status'] == 1){
														echo "<td>"."Pronto"."</td>";
													}else{
														echo "<td>"."Concluído"."</td>";
													}
													
												}
												echo "<td>".date('d/m/Y', strtotime('+2 days', strtotime($row['data'])))."</td>";
												echo " <td> <button><img  style=width:25px; src='botaoEditar.jpg'  alt='Ifmg'></button> </td>";
												echo "</tr>";

											}
											
										} else {
											?>
												

											<?php
										}
									?>

								</tbody>

							</table></center>					
						</form>
						<br>
						<br>
						
						<br>
						<br>


						<div class="modal fade" id="CadastroCurso" role="dialog">
						    <div class="modal-dialog modal-sm">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Cadastro de Curso</h4>
						        </div>
						        <div class="modal-body">
						        <form action="CadastrarCursoNoBd.php" method="post">
						          <input class="form-control" style="width: 210px;" placeholder="Nome do Curso" required="required" type="text" name="nomeCurso" value="" ><br>
						        </div>
						        <div class="modal-footer">
						          <button type="submit" class="btn btn-default" data-dismiss="modal"  >Confirmar</button>
						          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						          </form>
						        </div>

						      </div>

						    </div>

						  </div>
						  <div class="modal fade" id="CadastroDisciplina" role="dialog">
						    <div class="modal-dialog modal-sm">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Cadastro de Diciplina</h4>
						        </div>
						        <div class="modal-body">
						          
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.href = 'CadastrarCursoNoBd.php'" >Confirmar</button>
						          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

						        </div>

						      </div>

						    </div>

						  </div>
						  <div class="modal fade" id="CadastroSecretario" role="dialog">
						    <div class="modal-dialog modal-sm">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Cadastro de Secretário</h4>
						        </div>
						        <div class="modal-body">
						          
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.href = 'CadastrarCursoNoBd.php'" >Confirmar</button>
						          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

						        </div>

						      </div>

						    </div>

						  </div>
						   <div class="modal fade" id="CadastroTurma" role="dialog">
						    <div class="modal-dialog modal-sm">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Cadastro de Turma</h4>
						        </div>
						        <div class="modal-body">
						          <input class="form-control" style="width: 210px;" placeholder="Nome da Turma" required="required" type="text" name="nomeTurma" value="" ><br>
						          <input class="form-control" style="width: 210px;" placeholder="Código do Curso" required="required" type="text" name="codigoDoCurso" value="" ><br>
						          <input class="form-control" style="width: 210px;" placeholder="Código da Turma" required="required" type="text" name="codigoTurma" value="" ><br>
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.href = 'CadastrarCursoNoBd.php'" >Confirmar</button>
						          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

						        </div>

						      </div>

						    </div>

						  </div>
						   <div class="modal fade" id="ValidarUsuario" role="dialog">
						    <div class="modal-dialog modal-sm">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Validar Usuários</h4>
						        </div>
						        <div class="modal-body">
						          
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal" onClick="window.location.href = 'CadastrarCursoNoBd.php'" >Confirmar</button>
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