<?php 
	
	include ('../conexao.php');

	$nome = $_POST['nome'];
	$img_inicio = $_POST['imgInicio'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $descricao = $_POST['descricao'];

	$populacao = $_POST['populacao'];
	$area = $_POST['area'];
	$pib = $_POST['pib'];
	$idh = $_POST['idh'];
	$nome_oficial = $_POST['nmeoficial'];
	$localizacao = $_POST['localizacao'];
    $capital = $_POST['capital'];
    $gentilico = $_POST['gentilico'];

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
	
	 $consulta = mysqli_query($cn, "SELECT * FROM `cidade` WHERE `id_pais` = '$pais' AND `nome` = '$nome'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
	 // echo count($exibe);

	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";

		 header("Location: ../../cods/adm1/forms-add/add-cidade.php");
	} else{
		// echo "Usuário NÃO cadastrado";

		$sql = "INSERT INTO `cidade`(`id_pais`, `id_estado`, `nome`, `imagem_inicio`, `descricao`, `gentilico`, `populacao`, `localizacao`, `area`, `pib`, `idh`, `text_historia`, `imagem_historia`, `text_bandeira`, `imagem_bandeira`, `text_economia`, `imagem_economia`, `text_cultura`, `imagem_cultura`, `text_clima`, `text_vegetacao`, `text_relevo`) VALUES ('$pais', '$estado','$nome','$img_inicio','$descricao', '$gentilico', 
        '$populacao','$localizacao','$area','$pib','$idh',
        '$text_historia','$img_historia', '$text_bandeira','$img_bandeira','$text_economia','$img_economia','$text_cultura','$img_cultura','$clima','$vegetacao','$relevo')";

		$incluir = mysqli_query($cn, $sql);

		  header("Location: ../../cods/adm1/forms-add/add-cidade.php");
	}
