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

$sql = "INSERT INTO cadastro (nome, cpf, email, senha)

VALUES ('".$nome."', ".$cpf.",'".$email."', '".$senha."');";

if ($conn->query($sql) === TRUE) {

	$_SESSION['nome'] = $nome;
	$_SESSION['cpf']=$cpf;
	//$_SESSION['email']=$email;

echo "<script>alert('Registro inserido com sucesso.');</script>";

echo "<script>window.location = 'TelaInicialAluno.php';</script>";

} else {

echo "Erro: " . $sql . "<br>" . $conn->error;

}

$conn->close();

?>

</body>

</html>