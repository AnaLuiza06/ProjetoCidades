<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Cidades</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="./css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="./css/style-menu.css">
	
</head>
<body>
	
	<header>
		<div class="logo">
			<div>< ></div>
			<h3>Hello<span>World</span></h3>
		</div>
		<ul>
			<li><a href="./index.php">Home</a></li>
			<li><a href="./cods/inicio/pages-menu/pais.php">Países</a></li>
			<li><a href="./cods/inicio/pages-menu/regioes.php">Regiões</a></li>
			<li><a href="./cods/inicio/pages-menu/estados.php">Estados</a></li>
			<li><a href="./cods/inicio/pages-menu/cidades.php">Cidades</a></li>
			<li><a href="./cods/inicio/pages-menu/distritos.php">Distritos</a></li>
			<li><a href="./cods/inicio/pages-menu/p-turisticos.php">Pontos Turísticos</a></li>
		</ul>
		<div class="btn-login">
			<button type="button" class="btn btn-outline-info"><a href="./cods/adm1/home_adm.php">Login</a></button>
		</div>
	</header>

	<main>
		<section id="inicio">
			<img src="https://e4vwvaermbj.exactdn.com/wp-content/uploads/2020/07/7-pontos-turisticos-de-sao-luis.jpg?strip=all&lossy=1&ssl=1" class="img-inicio">
			<h1>Tenha informações de qualquer lugar do Planeta</h1>
			<form method="post" action="./conexao/pesquisar.php">
				<div>
					<select name="tabela">
						<option value="pais">País</option>
						<option value="regiao">Região</option>
						<option value="estado">Estado</option>
						<option value="cidade">Cidade</option>
						<option value="distrito">Cidade</option>
						<option value="pturistico">Ponto Turístico</option>
					</select>
					<input type="text" name="nome">
				</div>
				<button type="submit">Pesquisar</button>
			</form>
		</section>

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
				</div>
			</div>

			<div class="container-apresentacao active">
				<div class="text-apresentacao">
				</div>
				<div class="img-apresentacao">
					<img src="https://maladeaventuras.com/wp-content/uploads/2021/08/rua-do-giz-sao-luis.jpg">
				</div>
			</div>
		</section>

		<section class="container-carrosel">
			<h2><span>Países</span></h2>
			<div class="container-paises">
				<div class="cards-paises">
				<?php

					include ("./conexao/conexao.php");
                    $consulta_pais = mysqli_query($cn, "SELECT * FROM `pais`");
                    $exibe_pais = mysqli_fetch_all($consulta_pais, MYSQLI_ASSOC);

                    for ($i=0; $i < 3; $i++) { 
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $exibe_pais[$i]['imagem_inicio']?>">
                                <div>
                                    <h3><?php echo $exibe_pais[$i]['nome']?></h3>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                    <button><a href="../pais.php?id=<?php echo $exibe_pais[$i]['id']?>">Saber Mais</a></button>
                                </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
				</div>
			</div>
		</section>

		<section id="turismo">
			<h2><span>Pontos Turísticos</span></h2>
			<div class="container-paises">
				<button><</button>
				<div class="cards-paises">
					<div class="card">
					  <img class="card-img-top" src="https://www.turismoecia.net/wp-content/uploads/2020/01/01-Centro-Hist%C3%B3rico-01.jpg" alt="Imagem de capa do card">
					  <div class="card-body">
					  	<h5>Nome País</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					  </div>
					</div>

					<div class="card">
					  <img class="card-img-top" src="https://www.turismoecia.net/wp-content/uploads/2020/01/01-Centro-Hist%C3%B3rico-01.jpg" alt="Imagem de capa do card">
					  <div class="card-body">
					  	<h5>Nome País</h5>
					    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
					  </div>
					</div>

					<div class="card">
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

		<section class="footer">
				<div class="numer">
				<div>
					<h1>00</h1>
					<p>Países</p>
				</div>

				<div>
					<h1>00</h1>
					<p>Regiões</p>
				</div>

				<div>
					<h1>00</h1>
					<p>Estados</p>
				</div>

				<div>
					<h1>00</h1>
					<p>Cidades</p>
				</div>

				<div>
					<h1>00</h1>
					<p>P. Turísticos</p>
				</div>
			</div>

			<footer>

			</footer>
			<img src="https://www.turismoecia.net/wp-content/uploads/2020/01/01-Centro-Hist%C3%B3rico-01.jpg">
		</section>
</body>
</html>