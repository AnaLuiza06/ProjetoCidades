<?php 
	
	include ('../conexao.php');

    $id = $_GET['id'];
	$nome = $_POST['nome'];
	$img_inicio = $_POST['imgInicio'];
    $pais = $_POST['pais'];
    $descricao = $_POST['descricao'];

    $estados = $_POST['estados'];
	$populacao = $_POST['populacao'];
	$area = $_POST['area'];
	$pib = $_POST['pib'];
	$idh = $_POST['idh'];
	$localizacao = $_POST['localizacao'];

	$text_historia = $_POST['textHistoria'];
	$img_historia = $_POST['imgHistoria'];

	$clima = $_POST['clima'];
	$relevo = $_POST['relevo'];
	$vegetacao = $_POST['vegetacao'];

	$text_cultura = $_POST['textCultura'];
	$img_cultura = $_POST['imgCultura'];

	$text_economia = $_POST['textEconomia'];
	$img_economia = $_POST['imgEconomia'];
	
	 $consulta = mysqli_query($cn, "SELECT * FROM `regiao` WHERE `id` = '$id'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
	 // echo count($exibe);



	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";

        $incluir = mysqli_query($cn, "UPDATE `regiao` SET `id_pais`='$pais',`nome`='$nome',
        `imagem_inicio`='$img_inicio',`descricao`='$descricao',`estados`='$estados',`populacao`='$populacao',`localizacao`='$localizacao',`area`='$area',
        `pib`='$pib',`idh`='$idh',`text_historia`='$text_historia',`imagem_historia`='$img_historia',`text_economia`='$text_economia',
        `imagem_economia`='$img_economia',`text_cultura`='$text_cultura',`imagem_cultura`='$img_cultura',`text_clima`='$clima',
        `text_vegetacao`='$vegetacao',`text_relevo`='$relevo' WHERE `id` = '$id'");

		header("Location: ../../cods/adm1/forms-update/up-regiao.php?id=".$id."");
	}
?>
