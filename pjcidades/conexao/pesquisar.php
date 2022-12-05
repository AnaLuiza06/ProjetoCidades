<?php

	include ("./conexao.php");

	$tabela = $_POST['tabela'];
	$nome = $_POST['nome'];

	$consulta = mysqli_query($cn, "SELECT * FROM $tabela WHERE `nome` = '$nome'");
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	if (count($exibe) > 0) {
		$id = $exibe[0]['id'];
		header("Location: ./../cods/inicio/".$tabela.".php?id=".$id."");
	}
	else{
		header("Location: ../index.php");
	}

?>