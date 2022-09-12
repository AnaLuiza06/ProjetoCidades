<!DOCTYPE html>
<html>
<head>
	<title>Projeto Cidade</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style-forms.css">
</head>
<body>

	<img src="https://cdn.maioresemelhores.com/imagens/paisagens-mais-bonitas-do-brasil-og.jpg" class="img-fundo">
	<div class="container-form">
		<h2>Adicionar País</h2>
		<form>
			<div>
				<h4>Inicio</h4>
				<input type="text" name="nome" placeholder="Nome">
				<input type="text" name="imgInicio" placeholder="Imagem">
			</div>
			<div>
				<h4>Dados</h4>
				<input type="text" name="capital" placeholder="Capital">
				<input type="text" name="cidadepopulosa" placeholder="Cidade mais Populosa">
				<input type="number" name="populacao" placeholder="População">
				<input type="number" name="area" placeholder="Área">
				<input type="number" name="densidade" placeholder="Densidade">
				<input type="number" name="pib" placeholder="PIB">
				<input type="number" name="idh" placeholder="IDH">
				<input type="text" name="mapa" placeholder="Link Mapa">
			</div>

			<div>
				<h4>História</h4>
				<input type="text" name="historia" placeholder="Text História">
				<input type="text" name="imgHistoria" placeholder="Imagem">
			</div>

			<div class="btn-form">
				<button type="submit">Enviar</button>
			</div>
		</form>
	</div>

</body>
</html>