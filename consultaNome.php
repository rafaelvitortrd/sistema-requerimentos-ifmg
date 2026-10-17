<?php 
	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];

	$servername = "200.18.128.78:3306";

	$username = "reinaldo_rafaelv";

	$password = "reinaldo";

	$dbname = "reinaldo_rafaelvitor";
    $connect = mysql_connect($servername,$username,$password);
    $db = mysql_select_db($dbname);
	
	mysql_query("SELECT nome FROM cadastro WHERE cpf = '".$cpf."';");
 ?>