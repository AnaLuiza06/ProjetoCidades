<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Adicionar País</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../../css/style-menu.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-adm.css">
</head>
<body>

	<?php
		include ("./menu.php");
		include ("./conexao.php");

        $id = $_GET['id'];

        $consulta_cidade = mysqli_query($cn, "SELECT * FROM `cidade` WHERE `id` = ' $id'");
	 	$exibe_cidade = mysqli_fetch_all($consulta_cidade, MYSQLI_ASSOC);

        $id_pais = $exibe_cidade[0]['id_pais'];
        $id_estado = $exibe_cidade[0]['id_estado'];

        $consulta_pais_cidade = mysqli_query($cn, "SELECT * FROM `pais` WHERE `id` = '$id_pais'");
	 	$exibe_pais_cidade = mysqli_fetch_all($consulta_pais_cidade, MYSQLI_ASSOC);
        
        $consulta_estado_cidade = mysqli_query($cn, "SELECT * FROM `estado` WHERE `id` = '$id_estado'");
	 	$exibe_estado_cidade = mysqli_fetch_all($consulta_estado_cidade, MYSQLI_ASSOC);

		$consulta_pais = mysqli_query($cn, "SELECT * FROM `pais`");
	 	$exibe_pais = mysqli_fetch_all($consulta_pais, MYSQLI_ASSOC);

		$consulta_estado = mysqli_query($cn, "SELECT * FROM `estado`");
	 	$exibe_estado = mysqli_fetch_all($consulta_estado, MYSQLI_ASSOC);
	?>
	<main class="main-forms">
		<form method="post" action="../../../conexao/update/up-cidade.php?id=<?php echo $exibe_cidade[0]['id'];?>">
			<h2>Adicionar Cidade</h2>
			<div class="card-form">
				<h4>Inicio</h4>
				<div class="input-form">
					<label>País</label>
					<select name="pais">
                        <option value="<?php echo $exibe_pais_cidade[0]['id'];?>"><?php echo $exibe_pais_cidade[0]["nome"]; ?></option>
						<?php
							for($i = 0; $i < count($exibe_pais); $i++){
						
							echo "<option value='".$exibe_pais[$i]['id']."'>".$exibe_pais[$i]['nome']."</option>";
							}
						?>
					</select>
				</div>
				<div class="input-form">
					<label>Estado</label>
					<select name="estado">
                        <option value="<?php echo $exibe_estado_cidade[0]['id'];?>"><?php echo $exibe_estado_cidade[0]["nome"]; ?></option>
						<?php
							for($i = 0; $i < count($exibe_estado); $i++){
						
							echo "<option value='".$exibe_estado[$i]['id']."'>".$exibe_estado[$i]['nome']."</option>";
							}
						?>
					</select>
				</div>
				<div class="input-form">
					<label>Nome</label>
					<input type="text" name="nome" value="<?php echo $exibe_cidade[0]['nome'];?>">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgInicio" value="<?php echo $exibe_cidade[0]['imagem_inicio'];?>">
				</div>
			</div>

			<div class="card-form">
				<h4>Dados</h4>
				<div class="input-form">
					<label>População</label>
					<input type="numer" name="populacao" value="<?php echo $exibe_cidade[0]['populacao'];?>">
				</div>

				<div class="input-form">
					<label>Área</label>
					<input type="number" name="area" value="<?php echo $exibe_cidade[0]['area'];?>">
				</div>

				<div class="input-form">
					<label>PIB</label>
					<input type="numer" name="pib" value="<?php echo $exibe_cidade[0]['pib'];?>">
				</div>

				<div class="input-form">
					<label>IDH</label>
					<input type="numer" name="idh" value="<?php echo $exibe_cidade[0]['idh'];?>">
				</div>

				<div class="input-form">
					<label>Nome Oficioal</label>
					<input type="text" name="nmeoficial" value="<?php echo $exibe_cidade[0]['nome_oficial'];?>">
				</div>

				<div class="input-form">
					<label>Gentilico</label>
					<input type="text" name="gentilico" value="<?php echo $exibe_cidade[0]['gentilico'];?>">
				</div>

				<div class="input-form">
					<label>Localização</label>
					<input type="text" name="localizacao" value="<?php echo $exibe_cidade[0]['localizacao'];?>">
				</div>

			</div>

			<div class="card-form">
				<h4>História</h4>
				<div class="input-form">
					<label>Texto</label>
					<input type="text" name="textHistoria" value="<?php echo $exibe_cidade[0]['text_historia'];?>">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgHistoria" value="<?php echo $exibe_cidade[0]['imagem_historia'];?>">
				</div>
			</div>

			<div class="card-form">
				<h4>Bandeira</h4>
				<div class="input-form">
					<label>Texto</label>
					<input type="text" name="textBandeira" value="<?php echo $exibe_cidade[0]['text_bandeira'];?>">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgBandeira" value="<?php echo $exibe_cidade[0]['imagem_bandeira'];?>">
				</div>
			</div>

			<div class="card-form">
				<h4>Geografia</h4>
				<div class="input-form">
					<label>Clima</label>
					<input type="text" name="clima" value="<?php echo $exibe_cidade[0]['text_clima'];?>">
				</div>
				<div class="input-form">
					<label>Relevo</label>
					<input type="text" name="relevo" value="<?php echo $exibe_cidade[0]['text_relevo'];?>">
				</div>
				<div class="input-form">
					<label>Vegetação</label>
					<input type="text" name="vegetacao" value="<?php echo $exibe_cidade[0]['text_vegetacao'];?>">
				</div>
			</div>

			<div class="card-form">
				<h4>Economia</h4>
				<div class="input-form">
					<label>Texto</label>
					<input type="text" name="textEconomia" value="<?php echo $exibe_cidade[0]['text_economia'];?>">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgEconomia" value="<?php echo $exibe_cidade[0]['imagem_economia'];?>">
				</div>
			</div>

			<div class="card-form">
				<h4>Cultura</h4>
				<div class="input-form">
					<label>Texto</label>
					<input type="text" name="textCultura" value="<?php echo $exibe_cidade[0]['text_cultura'];?>">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgCultura" value="<?php echo $exibe_cidade[0]['imagem_cultura'];?>">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" style="background-color: #3475F4;">Enviar</button>
		</form>
	</main>

</body>
</html>