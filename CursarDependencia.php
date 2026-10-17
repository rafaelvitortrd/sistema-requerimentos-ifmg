<!DOCTYPE html>
<?php
include 'conexao.php';

?>
<html>
	<head>  

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
        

		<title>Solicitação de segunda chamada</title>
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


			<script type="text/javascript">
            //método que garante que o JQuery é executado somente após o documento ser carregado
            $(document).ready(function() { 
                //método executado quando o usuário selecionar um item no dropdown de estado
                //necessário identificar o name do select
                $("select[name=curso]").change(function() {
                    //monta o primeiro item do select de cidades 
                    $("select[name=turma]").html('<option value="0">Carregando...</option>');
                    $("select[name=disciplina]").html('<option value="0">Selecione uma turma primeiro</option>');
                    //invoca o arquivo cidades.php e passa para ele o valor do estado selecionado
                    $.post("turma.php", //método de envio dos dados para cidades.php
                            {curso: $(this).val()}, //valor repassado para cidades.php
                    function(valor) { //função para carregar o select de cidade
                        $("select[name=turma]").html(valor);
                    }
                    )
                })

                
                //Fazer a mesma coisa de cima para turma e disciplina
                $("select[name=turma]").change(function() {
                    $("select[name=disciplina]").html('<option value="0">Carregando...</option>');
                    $.post("disciplina.php", 
                            {turma: $(this).val()}, //valor repassado para cidades.php
                    function(valor) { //função para carregar o select de cidade
                        $("select[name=disciplina]").html(valor);
                    }
                    )
                }) 

            })
        </script>
			
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
					<div id="box-3">
						
						<input  type="submit" class="btn btn-danger" value="Sair"onClick="window.location.href = 'logout.php'">
					
					</div>
					<div id = "box-4">
											
					<img  style="width: 150px; border: 0.1px solid green; " src="logoifob.jpg"  alt="Ifmg">

				</div>
					<br><br><br><br><br><br><br>
					
							
					<div id="box-1" class="box">
						
						<form action="CursarDependenciaNoBD.php" method="post">
							<h1>Cursar Dependência</h1>
							<br>
							Curso:<br>
							<center> <!--https://pt.stackoverflow.com/questions/14646/como-selecionar-uma-op%C3%A7%C3%A3o-em-um-select-e-carregar-dados-relacionados-em-outro--> 

								  <select style="width: 300px;"class="form-control" name="curso"> 
								    <option value="">Selecione o Curso</option>
								    <?php
					                    //inclui o arquivo de conexão com o BD
					                    include "conexao.php";
					                    //string com o comando sql a ser executado para buscar os estados
					                    $sql = "SELECT * FROM tbcurso ORDER BY nomeCurso ASC";
					                    //executa o comando sql no banco de dados
					                    $qr = $conn->query($sql);
					                    //enquanto existir registro retornado na consulta, carrega no dropdown de estado
					                    while ($linha = $qr->fetch_assoc()) { 
					                        echo '<option value="' . $linha['codigoDoCurso'] . '">' . $linha['nomeCurso'] . '</option>';
					                    }
					                    //fecha conexão com o BD
					                    $conn->close();
					                

					                    /*
								        foreach($qr as $row){
								            echo '<option value="'.$row['codigoDoCurso'].'">'.$row['nomeCurso'].'</option>';
								        } 
								        */      
								    ?>	
								  
								</select></center>
							<br>
							<br>
							Turma:<br>
							<center>
							<select style="width: 300px;" class="form-control" name="turma">
							    <option value="0" disabled="disabled">Escolha um curso primeiro</option>
							</select>
							</center>
							<br><br>
							Disciplina:<br>
							<center>
							
							<select style="width: 300px;" class="form-control" name="disciplina">
								  <option value="0" disabled="disabled">Escolha uma turma primeiro</option>
							</select>
							
							</center><br><br>
							<center><input type="submit" class="btn btn-default" value="Confirmar"><br></center>				
						</form>

						<br><br><br><br><br><br><br><br>
												
						<center><input type="submit"  class="btn btn-danger" value="Voltar" onClick="window.location.href = 'TelaInicialAluno.php'"><br></center>
						<br>

					</div>

				</div>

			</div>

		</div>
		
	</body>
<?php 
	$conn->close();
?>
</html>