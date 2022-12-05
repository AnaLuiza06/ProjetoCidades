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

	?>
	<main class="main-forms">
		<form method="post" action="../../../conexao/adiciona/add-pturistico.php">
			<h2>Adicionar Ponto Turístico</h2>
			<div class="card-form">
				<h4>Inicio</h4>
				<div class="input-form">
					<label>País</label>
					<select name="pais">

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
						<option value="0">Sem distrito</option>
						<?php
							for ($i=0; $i < count($exibe_distrito); $i++) { 
								echo "<option value='".$exibe_distrito[$i]['id']."'>".$exibe_distrito[$i]['nome']."</option>";
							}

						?>
					</select>
				</div>

				<div class="input-form">
					<label>Nome</label>
					<input type="text" name="nome">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgInicio">
				</div>
			</div>

			<div class="card-form">
				<h4>Dados</h4>

				<div class="input-form">
					<label>Localização</label>
					<input type="text" name="localizacao">
				</div>

				<div class="input-form">
					<label>Área</label>
					<input type="number" name="area">
				</div>

                <div class="input-form">
					<label>Constrído em</label>
					<input type="date" name="data">
				</div>

                <div class="input-form">
					<label>Tipo</label>
					<select name="tipo">
						<option value="0">Urbano</option>
						<option value="1">Natural</option>
					</select>
				</div>

                <div class="input-form">
					<label>Responsável</label>
					<input type="text" name="responsavel">
				</div>
			</div>

			<div class="card-form">
				<h4>História</h4>
				<div class="input-form">
					<label>Texto</label>
					<input type="text" name="textHistoria">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgHistoria">
				</div>
			</div>

			<div class="card-form">
				<h4>Curiosidades</h4>
				<div class="input-form">
					<label>Texto</label>
					<input type="text" name="textCuriosidades">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgCuriosidades">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" style="background-color: #3475F4;">Enviar</button>
		</form>
	</main>

</body>
</html>