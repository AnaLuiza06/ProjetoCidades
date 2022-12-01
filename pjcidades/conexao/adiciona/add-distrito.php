<?php 
	
	include ('../conexao.php');

	$nome = $_POST['nome'];
	$img_inicio = $_POST['imgInicio'];
    $pais = $_POST['pais'];
    $cidade = $_POST['cidade'];

	$populacao = $_POST['populacao'];
	$area = $_POST['area'];
	$pib = $_POST['pib'];
	$idh = $_POST['idh'];
	$nome_oficial = $_POST['nmeoficial'];
	$localizacao = $_POST['localizacao'];
    $gentilico = $_POST['gentilico'];

	$text_historia = $_POST['textHistoria'];
	$img_historia = $_POST['imgHistoria'];

	$clima = $_POST['clima'];
	$relevo = $_POST['relevo'];
	$vegetacao = $_POST['vegetacao'];

	$text_cultura = $_POST['textCultura'];
	$img_cultura = $_POST['imgCultura'];

	$text_economia = $_POST['textEconomia'];
	$img_economia = $_POST['imgEconomia'];
	
	 $consulta = mysqli_query($cn, "SELECT * FROM `distrito` WHERE `id_cidade` = '$cidade' AND `nome` = '$nome'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

     print_r($exibe);
	 // echo count($exibe);

	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";

		 header("Location: ../../cods/adm1/forms-add/add-distrito.php");
	} else{
		// echo "Usuário NÃO cadastrado";

		$sql = "INSERT INTO `distrito`(`id_pais`, `id_cidade`, `nome`, `imagem_inicio`, `nome_oficial`, `gentilico`, `populacao`, `localizacao`, 
        `area`, `pib`, `idh`, `text_historia`, `imagem_historia`, `text_economia`, `imagem_economia`, `text_cultura`, `imagem_cultura`, `text_clima`, 
        `text_vegetacao`, `text_relevo`) VALUES ('$pais','$cidade','$nome','$img_inicio','$nome_oficial','$gentilico','$populacao','$localizacao','$area',
        '$pib','$idh','$text_historia','$img_historia','$text_economia','$img_economia','$text_cultura','$img_cultura','$clima','$vegetacao','$relevo')";
		$incluir = mysqli_query($cn, $sql);

		 header("Location: ../../cods/adm1/forms-add/add-distrito.php");
	}
