<?php
include 'conexao.php';
//function numReq(){ //numReq = número do requerimento
	  $consulta = $conn->query("select max(numeroDoRequerimento) as req from requerimentos;");
	 if ($consulta->num_rows > 0) {
		 $linha = $consulta->fetch_assoc();
		$req = $linha['req'] + 1;
	 }else{
		$req = 1;
	 }
//}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo"<script>alert('O arquivo é uma imagem - " . $check["mime"] . ".');</script>";
        
        $uploadOk = 1;
    } else {
         echo"<script>alert('O arquivo não é uma imagem');</script>";
        
        $uploadOk = 0;
    }
}*/
$target_file = $target_dir . $req . "." . $imageFileType;
// Check if file already exists
if (file_exists($target_file)) {
     echo"<script>alert('Desculpe, o arquivo já existe');</script>";
    
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
     echo"<script>alert('Desculpe, o arquivo é muito pesado');</script>";
   
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "pdf") {
     echo"<script>alert('Escolha somente arquivos no formato PDF, JPG, JPEG, PNG e GIF.');</script>";
    
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   
     echo"<script>alert('Não foi feito o upload');</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d');

		$conn->query("insert into requerimentos (anexos, cpf, nome, tipoDeRequerimento,data,status)values ('".$target_file."', '".$_SESSION['cpf']."' , '".$_SESSION['nome']."', 'Segunda Chamada','".$data."', 2)");
		$nomeArquivo = basename( $_FILES["fileToUpload"]["name"]);
		echo"<script language='javascript' type='text/javascript'>;window.location.href='feedbackusuario.PHP';</script>";
		//echo "<script>alert('The file '". $nomeArquivo . "' has been uploaded.');</script>";
		
    } else {
         echo"<script>alert('Sorry, there was an error uploading your file');</script>";
     
    }
}
	echo "<script>window.location = 'TelaInicialAluno.php';</script>";
?>