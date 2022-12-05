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
	?>
	<main class="main-forms">
		<form method="post" action="../../../conexao/adiciona/add-estado.php">
			<h2>Adicionar Estado</h2>
			<div class="card-form">
				<h4>Inicio</h4>
				<div class="input-form">
					<label>País</label>
					<select name="pais">
                    <?php
                        for ($i = 0; $i < count($exibe_pais); $i++){
                            echo "<option value = '".$exibe_pais[$i]['id']."'>".$exibe_pais[$i]['nome']."</option>";
                        }

                    ?>
					</select>
				</div>
				<div class="input-form">
					<label>Região</label>
					<select name="regiao">
					<?php
                        for ($i = 0; $i < count($exibe_regiao); $i++){
                            echo "<option value = '".$exibe_regiao[$i]['id']."'>".$exibe_regiao[$i]['nome']."</option>";
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
				<div class="input-form">
					<label>Descricao</label>
					<input type="text" name="descricao">
				</div>
			</div>

			<div class="card-form">
				<h4>Dados</h4>
				<div class="input-form">
					<label>População</label>
					<input type="numer" name="populacao">
				</div>

				<div class="input-form">
					<label>Área</label>
					<input type="number" name="area">
				</div>

				<div class="input-form">
					<label>PIB</label>
					<input type="numer" name="pib">
				</div>

				<div class="input-form">
					<label>IDH</label>
					<input type="numer" name="idh">
				</div>

				<div class="input-form">
					<label>Gentilico</label>
					<input type="text" name="gentilico">
				</div>

				<div class="input-form">
					<label>Localização</label>
					<input type="text" name="localizacao">
				</div>

				<div class="input-form">
					<label>Capital</label>
					<input type="text" name="capital">
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
				<h4>Bandeira</h4>
				<div class="input-form">
					<label>Texto</label>
					<input type="text" name="textBandeira">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgBandeira">
				</div>
			</div>

			<div class="card-form">
				<h4>Geografia</h4>
				<div class="input-form">
					<label>Clima</label>
					<input type="text" name="clima">
				</div>
				<div class="input-form">
					<label>Relevo</label>
					<input type="text" name="relevo">
				</div>
				<div class="input-form">
					<label>Vegetação</label>
					<input type="text" name="vegetacao">
				</div>
			</div>

			<div class="card-form">
				<h4>Economia</h4>
				<div class="input-form">
					<label>Texto</label>
					<input type="text" name="textEconomia">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgEconomia">
				</div>
			</div>

			<div class="card-form">
				<h4>Cultura</h4>
				<div class="input-form">
					<label>Texto</label>
					<input type="text" name="textCultura">
				</div>
				<div class="input-form">
					<label>Imagem</label>
					<input type="text" name="imgCultura">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" style="background-color: #3475F4;">Enviar</button>
		</form>
	</main>

</body>
</html>