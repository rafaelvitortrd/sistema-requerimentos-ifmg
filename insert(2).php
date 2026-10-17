<html>
<head>
</head>
<body>
<?php

include 'conexao.php';

$nome = $_POST["nome"];

$cpf = $_POST["cpf"];

$email= $_POST["email"];

$senha= $_POST["senha"];

$senha2= $_POST["senha2"];

$ra= $_POST["ra"];



if ($senha==$senha2){
	$sql = "INSERT INTO aluno (nome, cpf, email, senha,ra,autorizado)

	VALUES ('".$nome."', '".$cpf."','".$email."', '".$senha."',".$ra.",0);";
	
	if ($conn->query($sql) == TRUE) {

		$_SESSION['nome'] = $nome;
		$_SESSION['cpf']=$cpf;
		$_SESSION['ra']=$ra;

		echo "<script>alert('Registro inserido com sucesso.');</script>";

		echo "<script>window.location = 'TelaInicialAluno.php';</script>";

	} else {

		echo "<script>alert('O cpf digitado já se encontra em uso!');</script>";


		echo "<script>window.location = window.history.go(-1);</script>";

	}
}

$conn->close();

?>

</body>

</html>