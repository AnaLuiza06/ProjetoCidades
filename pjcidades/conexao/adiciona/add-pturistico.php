<?php 
	
	include ('../conexao.php');

	$nome = $_POST['nome'];
	$img_inicio = $_POST['imgInicio'];
    $pais = $_POST['pais'];
    $regiao = $_POST['regiao'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $distrito = $_POST['distrito'];

    $localizacao = $_POST['localizacao'];
	$area = $_POST['area'];
	$data = $_POST['data'];
	$tipo = $_POST['tipo'];
	$responsavel = $_POST['responsavel'];

	$text_historia = $_POST['textHistoria'];
	$img_historia = $_POST['imgHistoria'];

	$text_curiosidades = $_POST['textCuriosidades'];
	$img_curiosidades = $_POST['imgCuriosidades'];
	
	 $consulta = mysqli_query($cn, "SELECT * FROM `pturistico` WHERE `id_cidade` = '$cidade' AND `nome` = '$nome'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	 // echo count($exibe);

	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";
		 header("Location: ../../cods/adm1/forms-add/add-pturistico.php");
	} else{
		// echo "Usuário NÃO cadastrado";

		$sql = "INSERT INTO `pturistico`(`id_pais`, `id_regiao`, `id_estado`, `id_cidade`, `id_distrito`, `nome`, `imagem_inicio`, `localizacao`, `area`, `data_construcao`, `tipo`, `responsavel`, `text_historia`, `imagem_historia`, `text_curiosidades`, `imagem_curiosidades`) VALUES ('$pais','$regiao','$estado','$cidade','$distrito','$nome','$img_inicio','$localizacao','$area','$data','$tipo','$responsavel','$text_historia','$img_historia','$text_curiosidades','$img_curiosidades')";
		$incluir = mysqli_query($cn, $sql);

		 header("Location: ../../cods/adm1/forms-add/add-pturistico.php");
	}
