<html>
<head>
</head>
<body>
<?php

//Parâmetros de conexão
session_start();
$servername = "200.18.128.78:3306";

$username = "reinaldo_rafaelv";

$password = "reinaldo";

$dbname = "reinaldo_rafaelvitor";

// Cria a conexão

$conn = new mysqli($servername, $username, $password, $dbname);

// Check a conexão

if ($conn->connect_error) {

die("Falha na conexão: " . $conn->connect_error);

}

?>
</body>
</html>