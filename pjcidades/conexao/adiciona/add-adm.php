<?php 
	
	include ('../conexao.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$data = $_POST['data_nascimento'];
	$senha = $_POST['senha'];
	
	 $consulta = mysqli_query($cn, "SELECT * FROM `adm` WHERE `nome` = '$nome' AND `email` = '$email'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	 // echo count($exibe);

	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";
		header('Location: ../../cods/adm1/forms-add/add-adm.php');
	} else{
		// echo "Usuário NÃO cadastrado";

		$sql = "INSERT INTO `adm`(`nome`, `email`, `nascimento`, `senha`) VALUES ('$nome','$email','$data','$senha')";
		print_r($sql);
		$incluir = mysqli_query($cn, $sql);
		header('Location: ../../cods/adm1/forms-add/add-adm.php');
	}
