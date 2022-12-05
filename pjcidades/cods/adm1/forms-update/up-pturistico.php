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

		$consulta_pais = mysqli_query($cn, "SELECT * FROM `pais`");
	 	$exibe_pais = mysqli_fetch_all($consulta_pais, MYSQLI_ASSOC);

	 	$consulta_regiao = mysqli_query($cn, "SELECT * FROM `regiao`");
	 	$exibe_regiao = mysqli_fetch_all($consulta_regiao, MYSQLI_ASSOC);

	 	$consulta_estado = mysqli_query($cn, "SELECT * FROM `estado`");
	 	$exibe_estado = mysqli_fetch_all($consulta_estado, MYSQLI_ASSOC);

		$consulta_cidade = mysqli_query($cn, "SELECT * FROM `cidade`");
	 	$exibe_cidade = mysqli_fetch_all($consulta_cidade, MYSQLI_ASSOC);

	 	$consulta_distrito = mysqli_query($cn, "SELECT * FROM `distrito`");
	 	$exibe_distrito = mysqli_fetch_all($consulta_distrito, MYSQLI_ASSOC);

	 	$consulta_pturistico = mysqli_query($cn, "SELECT * FROM `pturistico` WHERE `id` = '$id'");
	 	$exibe_pturistico = mysqli_fetch_all($consulta_pturistico, MYSQLI_ASSOC);

	 	$id_pais = $exibe_pturistico[0]['id_pais'];
	 	$id_regiao = $exibe_pturistico[0]['id_regiao'];
	 	$id_estado = $exibe_pturistico[0]['id_estado'];
	 	$id_cidade = $exibe_pturistico[0]['id_cidade'];
	 	$id_distrito = $exibe_pturistico[0]['id_distrito'];


	 	$consulta_pturistico_pais = mysqli_query($cn, "SELECT * FROM `pais` WHERE `id` = '$id_pais'");
	 	$exibe_pturistico_pais = mysqli_fetch_all($consulta_pturistico_pais, MYSQLI_ASSOC);

	 	$consulta_pturistico_regiao = mysqli_query($cn, "SELECT * FROM `regiao` WHERE `id` = '$id_regiao'");
	 	$exibe_pturistico_regiao = mysqli_fetch_all($consulta_pturistico_regiao, MYSQLI_ASSOC);

	 	$consulta_pturistico_estado = mysqli_query($cn, "SELECT * FROM `estado` WHERE `id` = '$id_estado'");
	 	$exibe_pturistico_estado = mysqli_fetch_all($consulta_pturistico_estado, MYSQLI_ASSOC);

	 	$consulta_pturistico_cidade = mysqli_query($cn, "SELECT * FROM `cidade` WHERE `id` = '$id_cidade'");
	 	$exibe_pturistico_cidade = mysqli_fetch_all($consulta_pturistico_cidade, MYSQLI_ASSOC);

	 	$consulta_pturistico_distrito = mysqli_query($cn, "SELECT * FROM `distrito` WHERE `id` = '$id_distrito'");
	 	$exibe_pturistico_distrito = mysqli_fetch_all($consulta_pturistico_distrito, MYSQLI_ASSOC);

	?>
	<main class="main-forms">
		<form method="post" action="../../../conexao/update/up-pturistico.php?id=<?php echo $exibe_pturistico[0]['id'];?>">
			<h2>Adicionar Ponto Turístico</h2>
			<div class="card-form">
				<h4>Inicio</h4>
				<div class="input-form">
					<label>País</label>
					<select name="pais">
						<option value="<?php echo $exibe_pturistico_pais[0]['id'];?>"><?php echo $exibe_pturistico_pais[0]['nome'];?></option>
						<?php
							for ($i=0; $i < count($exibe_pais); $i++) { 
								echo "<option value='".$exibe_pais[$i]['id']."'>".$exibe_pais[$i]['nome']."</option>";
							}

						?>
					</select>
				</div>

				<div class="input-form">
					<label>Região</label>
					<select name="regiao">
						<option value="<?php echo $exibe_pturistico_regiao[0]['id'];?>"><?php echo $exibe_pturistico_regiao[0]['nome'];?></option>
						<?php
							for ($i=0; $i < count($exibe_regiao); $i++) { 
								echo "<option value='".$exibe_regiao[$i]['id']."'>".$exibe_regiao[$i]['nome']."</option>";
							}

						?>
					</select>
				</div>

				<div class="input-form">
					<label>Estado</label>
					<select name="estado">
						<option value="<?php echo $exibe_pturistico_estado[0]['id'];?>"><?php echo $exibe_pturistico_estado[0]['nome'];?></option>
						<?php
							for ($i=0; $i < count($exibe_estado); $i++) { 
								echo "<option value='".$exibe_estado[$i]['id']."'>".$exibe_estado[$i]['nome']."</option>";
							}

						?>
					</select>
				</div>

                <div class="input-form">
					<label>Cidade</label>
					<select name="cidade">
						<option value="<?php echo $exibe_pturistico_cidade[0]['id'];?>"><?php echo $exibe_pturistico_cidade[0]['nome'];?></option>
						<?php
							for ($i=0; $i < count($exibe_cidade); $i++) { 
								echo "<option value='".$exibe_cidade[$i]['id']."'>".$exibe_cidade[$i]['nome']."</option>";
							}

						?>
					</select>
				</div>

				<div class="input-form">
					<label>Distríto</label>
					<select name="distrito">
						<?php
							if($exibe_pturistico_distrito[0]['id'] == 0){
						?>
							<option value="<?php echo $exibe_pturistico_distrito[0]['id'];?>">Sem distrito</option>
						<?php
							}
							else{
						?>
							<option value="<?php echo $exibe_pturistico_distrito[0]['id'];?>"><?php echo $exibe_pturistico_distrito[0]['nome'];?></option>
							<option value="0">Sem distrito</option>
						<?php
						}

							for ($i=0; $i < count($exibe_distrito); $i++) { 
								echo "<option value='".$exibe_distrito[$i]['id']."'>".$exibe_distrito[$i]['nome']."</option>";
							}

						?>
					</select>
				</div>

				<div class="input-form">
					<label>Nome</label>
					<input type="text" name="nome" value="<?php echo $exibe_pturistico[0]['nome'];?>">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgInicio" value="<?php echo $exibe_pturistico[0]['imagem_inicio'];?>">
				</div>
			</div>

			<div class="card-form">
				<h4>Dados</h4>

				<div class="input-form">
					<label>Localização</label>
					<input type="number" name="localizacao" value="<?php echo $exibe_pturistico[0]['localizacao'];?>">
				</div>

				<div class="input-form">
					<label>Área</label>
					<input type="number" name="area" value="<?php echo $exibe_pturistico[0]['area'];?>">
				</div>

                <div class="input-form">
					<label>Constrído em</label>
					<input type="date" name="data" value="<?php echo $exibe_pturistico[0]['data'];?>">
				</div>

                <div class="input-form">
					<label>Tipo</label>
					<select name="tipo">
						<?php
							if($exibe_pturistico[0]['tipo'] == 0){
						?>
							<option value="0">Urbano</option>
							<option value="1">Natural</option>
						<?php
							}
							else{
						?>
							<option value="1">Natural</option>
							<option value="0">Urbano</option>
						<?php
							}

						?>
					</select>
				</div>

                <div class="input-form">
					<label>Responsável</label>
					<input type="text" name="responsavel" value="<?php echo $exibe_pturistico[0]['responsavel'];?>">
				</div>
			</div>

			<div class="card-form">
				<h4>História</h4>
				<div class="input-form">
					<label>Texto</label>
					<input type="text" name="textHistoria" value="<?php echo $exibe_pturistico[0]['text_historia'];?>">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgHistoria" value="<?php echo $exibe_pturistico[0]['imagem_historia'];?>">
				</div>
			</div>

			<div class="card-form">
				<h4>Curiosidades</h4>
				<div class="input-form">
					<label>Texto</label>
					<input type="text" name="textCuriosidades" value="<?php echo $exibe_pturistico[0]['text_curiosidades'];?>">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgCuriosidades" value="<?php echo $exibe_pturistico[0]['imagem_curiosidades'];?>">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" style="background-color: #3475F4;">Enviar</button>
		</form>
	</main>

</body>
</html>