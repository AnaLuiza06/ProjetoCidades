<?php 
	
	include ('../conexao.php');

	$id = $_GET['id'];
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
	

		$sql = "UPDATE `pturistico` SET `id_pais`='$pais',`id_regiao`='$regiao',`id_estado`='$regiao',`id_cidade`='$cidade',`id_distrito`='$distrito',`nome`='$nome',`imagem_inicio`='$img_inicio',`localizacao`='$localizacao',`area`='$area',`data_construcao`='$area',`tipo`='$tipo',`responsavel`='$responsavel',`text_historia`='$text_historia',`imagem_historia`='$img_historia',`text_curiosidades`='$text_curiosidades',`imagem_curiosidades`='$img_curiosidades' WHERE `id` = '$id'";
		$incluir = mysqli_query($cn, $sql);

		 header("Location: ../../cods/adm1/forms-update/up-pturistico.php?id=".$id."");