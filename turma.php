<?php
	include "conexao.php";
	$curso = $_POST['curso'];
	$sql = "SELECT * FROM tbturma WHERE codigoDoCurso = '$curso' ORDER BY nomeTurma ASC";
	$qr = $conn->query($sql);

	if ($qr->num_rows == 0) {
	    echo '<option value="0">' . htmlentities('Não há turmas nesse curso') . '</option>';
	} 
	else {
	    echo "<option value='0'>Selecione uma turma</option>";
	    while ($linha = $qr->fetch_assoc()) {
	        echo '<option value="' . $linha['codigoDaTurma'] . '">' . $linha['nomeTurma'] . '</option>';
	    }
	}
?>