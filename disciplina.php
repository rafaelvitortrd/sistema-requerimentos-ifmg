<?php
	include "conexao.php";
	$turma = $_POST['turma'];
	$sql = "SELECT * FROM tbdisciplina WHERE codigoDaTurma = '$turma' ORDER BY nomeDisciplina ASC";
	$qr = $conn->query($sql);

	if ($qr->num_rows == 0) {
	    echo '<option value="0">' . htmlentities('Não há disciplinas nessa turma') . '</option>';
	} 
	else {
		//echo "<option value='0'>Selecione uma disciplina</option>";
	    while ($linha = $qr->fetch_assoc()) {
	        echo '<option value="' . $linha['codigoDaDisciplina'] . '">' . $linha['nomeDisciplina'] . '</option>';
	    }
	}
?>