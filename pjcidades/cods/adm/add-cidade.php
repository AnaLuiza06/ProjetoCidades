<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Adicionar País</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/style-adm.css">
</head>
<body>

	<main>
		<a href="#">
			<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
			  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
			</svg>
		</a>
		<form>
			<h2>Adicionar País</h2>
			<div class="card-form">
				<h4>Inicio</h4>
				<div class="input-form">
					<label>Região</label>
					<input type="text" name="regiao">
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
					<label>Nome Oficioal</label>
					<input type="text" name="nmeoficial">
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
					<label>Mapa</label>
					<input type="text" name="mapa">
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
			<button type="button" class="btn btn-primary" style="background-color: #3475F4;">Enviar</button>
		</form>
	</main>

</body>
</html>