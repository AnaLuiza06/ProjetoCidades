<?php 
	
	include ('../conexao.php');

	$nome = $_POST['nome'];
	$img_inicio = $_POST['imgInicio'];

	$populacao = $_POST['populacao'];
	$area = $_POST['area'];
	$pib = $_POST['pib'];
	$idh = $_POST['idh'];
	$nome_oficial = $_POST['nmeoficial'];
	$gentilico = $_POST['gentilico'];
	$localizacao = $_POST['localizacao'];
	$capital = $_POST['capital'];
	$idioma = $_POST['idioma'];

	$text_historia = $_POST['textHistoria'];
	$img_historia = $_POST['imgHistoria'];

	$text_bandeira = $_POST['textBandeira'];
	$img_bandeira = $_POST['imgBandeira'];

	$clima = $_POST['clima'];
	$relevo = $_POST['relevo'];
	$vegetacao = $_POST['vegetacao'];

	$text_cultura = $_POST['textCultura'];
	$img_cultura = $_POST['imgCultura'];

	$text_economia = $_POST['textEconomia'];
	$img_economia = $_POST['imgEconomia'];
	
	 $consulta = mysqli_query($cn, "SELECT `nome` FROM `pais` WHERE `nome` = '$nome'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	 // echo count($exibe);

	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";
		echo "<script>alert('País já existente.')</script>";
	} else{
		// echo "Usuário NÃO cadastrado";

		$sql = "INSERT INTO `pais`(`nome`, `imagem_inicio`, `nome_oficial`, `gentilico`, `populacao`, `localizacao`, `capital`, `idioma`, `area`, `pib`, `idh`, `text_historia`, `imagem_historia`, `text_bandeira`, `imagem_bandeira`, `text_economia`, `imagem_economia`, `text_cultura`, `imagem_cultura`, `text_clima`, `text_vegetacao`, `text_relevo`) 
			VALUES ('$nome','$img_inicio','$nome_oficial','$gentilico','$populacao','$localizacao','$capital','$idioma','$area','$pib','$idh','$text_historia','$img_historia','$text_bandeira','$img_bandeira','$text_economia','$img_economia','$text_cultura','$img_cultura','$clima','$vegetacao','$relevo')";
		print_r($sql);
		$incluir = mysqli_query($cn, $sql);
		header('Location: ../../adm1/forms-add/add-pais.php');
	}
