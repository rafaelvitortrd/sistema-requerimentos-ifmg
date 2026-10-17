<html>
<head>
</head>
<body>
<?php

include 'conexao.php';

$nome = $_POST["nome"];

$cpf = $_POST["cpf"];

$senha= $_POST["senha"];

$sql = "INSERT INTO secretario (nome, cpf, senha)

VALUES ('".$nome."', ".$cpf.",'".$senha."');";

if ($conn->query($sql) === TRUE) {

	$_SESSION['nome'] = $nome;
	$_SESSION['cpf']= $cpf;
	

echo "<script>alert('Registro inserido com sucesso.');</script>";

echo "<script>window.location = 'TelaInicialSecretario.php';</script>";

} else {

echo "Erro: " . $sql . "<br>" . $conn->error;

}

$conn->close();

?>

</body>

</html>