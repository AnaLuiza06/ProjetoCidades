<?php 
	
	include ('../conexao.php');

    $id = $_GET['id'];
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

		// echo "Usuário NÃO cadastrado";

		$sql = "UPDATE `pais` SET `nome`= '$nome',`imagem_inicio`='$img_inicio',`nome_oficial`= '$nome_oficial',`gentilico`= '$gentilico',`populacao`= '$populacao',
        `localizacao`= '$localizacao',`capital`= '$capital',`idioma`= '$idioma',`area`= '$area',`pib`= '$pib',`idh`= '$idh',`text_historia`='$text_historia',`imagem_historia`='$img_historia',
        `text_bandeira`='$text_bandeira',`imagem_bandeira`='$img_bandeira',`text_economia`='$text_economia',`imagem_economia`='$img_economia',`text_cultura`='$text_cultura',`imagem_cultura`='$img_cultura',
        `text_clima`='$clima',`text_vegetacao`='$vegetacao',`text_relevo`='$relevo' WHERE `id` = '$id'";
		print_r($sql);
		$incluir = mysqli_query($cn, $sql);
		header("Location: ../../adm1/forms-update/up-pais.php?id=$id");
?>