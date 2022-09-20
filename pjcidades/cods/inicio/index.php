<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Cidades</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
</head>
<body>
	
	<?php 
		include ("./menu.php");
	?>

	<main>
		<section id="inicio">
			<h1>Tenha informações de qualquer lugar do Planeta</h1>
			<div class="input-inicio">
				<input type="text" name="escolerpais">
				<button><a href="#">Buscar</a></button>
			</div>
		</section>
		<img src="https://e4vwvaermbj.exactdn.com/wp-content/uploads/2020/07/7-pontos-turisticos-de-sao-luis.jpg?strip=all&lossy=1&ssl=1" class="img-inicio">

		<section id="apresentacao">
			<h2><span>Apresentação</span></h2>
			<div class="container-apresentacao">
				<div class="text-apresentacao">
					<p>O HelloWorld é um banco de informações de lugares do mundo inteiro, tendo dados desde grandes potências mundiais até pequenas cidades de interior.
					Aqui é possivel de achar informações como a história do local, sua geografia, dados atualizados, sobre sua econômia, sua cultura, além de algumas curiosidades.</p>
					<p>Também é possivel encontrar informações sobre alguns pontos turísticos, falando de sua história, localização, responsãovel e também curiosidades.</p>
					<p>Para acaso queira pesquisar um lugar que deseja conhecer, também se encontra o comentário de algumas pessoas dando suas opiniões sobre os passeios.</p>
				</div>
				<div class="img-apresentacao">
					<img src="https://maladeaventuras.com/wp-content/uploads/2021/08/rua-do-giz-sao-luis.jpg">
				</div>
			</div>
		</section>

		<section>
			<h2><span>Países</span></h2>
			<div class="container-paises">
				<button><</button>
				<div class="cards-paises">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="https://www.turismoecia.net/wp-content/uploads/2020/01/01-Centro-Hist%C3%B3rico-01.jpg" alt="Imagem de capa do card">
					  <div class="card-body">
					  	<h5>Nome País</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					  </div>
					</div>

					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="https://www.turismoecia.net/wp-content/uploads/2020/01/01-Centro-Hist%C3%B3rico-01.jpg" alt="Imagem de capa do card">
					  <div class="card-body">
					  	<h5>Nome País</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					  </div>
					</div>

					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="https://www.turismoecia.net/wp-content/uploads/2020/01/01-Centro-Hist%C3%B3rico-01.jpg" alt="Imagem de capa do card">
					  <div class="card-body">
					  	<h5>Nome País</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					  </div>
					</div>
				</div>
				<button>></button>
			</div>
		</section>

		<section id="turismo">
			<h2><span>Pontos Turísticos</span></h2>
			<div class="container-paises">
				<button><</button>
				<div class="cards-paises">
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="https://www.turismoecia.net/wp-content/uploads/2020/01/01-Centro-Hist%C3%B3rico-01.jpg" alt="Imagem de capa do card">
					  <div class="card-body">
					  	<h5>Nome País</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					  </div>
					</div>

					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="https://www.turismoecia.net/wp-content/uploads/2020/01/01-Centro-Hist%C3%B3rico-01.jpg" alt="Imagem de capa do card">
					  <div class="card-body">
					  	<h5>Nome País</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					  </div>
					</div>

					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src="https://www.turismoecia.net/wp-content/uploads/2020/01/01-Centro-Hist%C3%B3rico-01.jpg" alt="Imagem de capa do card">
					  <div class="card-body">
					  	<h5>Nome País</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					  </div>
					</div>
				</div>
				<button>></button>
			</div>
		</section>
	</main>

	<footer>
		
	</footer>
</body>
</html>