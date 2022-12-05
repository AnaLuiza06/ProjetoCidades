<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Cidades</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
</head>
<body>
	<!-- Incluir Menu -->
	<?php 
		include ("./menu.php");
		include ("./pages-menu/conexao.php");

		 $id = $_GET['id'];

		 $consulta_cidade = mysqli_query($cn, "SELECT * FROM `cidade` WHERE `id` = '$id'");
         $exibe_cidade = mysqli_fetch_all($consulta_cidade, MYSQLI_ASSOC);
	?>

	<main>
		<section id="inicio">
			<div class="container-inicio">
				<div class="text-inicio">
					<h1><?php echo $exibe_cidade[0]['nome']; ?></h1>
				</div>
			</div>

			<img src="<?php echo $exibe_cidade[0]['imagem_inicio'];?>" class="img-inicio">
		</section>
		
		<section id="regioes">
			<div class="carrossel-regioes">
				<div class="btns-carrossel">
					<button class="btn-carrossel"><</button>
					<button class="btn-carrossel">></button>
				</div>
				<div class="container-carrossel">
					<a href="#" class="active">
						<img src="https://static.todamateria.com.br/upload/54/17/541775e12aac4-mata-das-araucarias.jpg?auto_optimize=low">
					</a>

					<a href="#" class="active">
						<img src="https://magazine.zarpo.com.br/wp-content/uploads/2019/01/rio-de-janeiro_zarpo-1.jpg">
					</a>

					<a href="#" class="active">
						<img src="https://s3.static.brasilescola.uol.com.br/img/2014/08/pantanal-brasileiro.jpg">
					</a>

					<a href="#">
						<img src="https://st4.depositphotos.com/1485837/22688/i/600/depositphotos_226887570-stock-photo-landscape-of-the-caatinga-in.jpg">
					</a>

					<a href="#">
						<img src="https://s5.static.brasilescola.uol.com.br/be/2020/05/floresta-amazonica.jpg">
					</a>
				</div>
			</div>

			<div class="text-regioes">
				<div class="numeros">
						<h2>Dados</h2>
					</div>
					<div class="informacoes">
						<p>Nome Oficioal: <?php echo $exibe_cidade[0]['nome_oficial'];?></p>
						<p>Gentilico: <?php echo $exibe_cidade[0]['gentilico'];?></p>
						<p>Localização: <?php echo $exibe_cidade[0]['localizacao'];?></p>
						<p>Número de Habitantes: <?php echo $exibe_cidade[0]['populacao'];?></p>
						<p>Área Territorial: <?php echo $exibe_cidade[0]['area'];?></p>
						<p>PIB: <?php echo $exibe_cidade[0]['pib'];?></p>
						<p>IDH: <?php echo $exibe_cidade[0]['idh'];?></p>
					</div>
			</div>
		</section>

		<section id="historia">
			<div class="img-historia">
				<img src="<?php echo $exibe_cidade[0]['imagem_historia'];?>">
			</div>
			<div class="text-historia">
				<h2>História</h2>
				<p><?php echo $exibe_cidade[0]['text_historia'];?></p>
			</div>
		</section>

		<section id="bandeira">
			<div class="text-bandeira">
				<h2>Bandeira</h2>
				<p><?php echo $exibe_cidade[0]['text_bandeira'];?></p>
			</div>
			<div class="img-bandeira">
				<img src="<?php echo $exibe_cidade[0]['imagem_bandeira'];?>">
			</div>
		</section>

		<section id="geografia">
			<div class="container-geografia">
				<h2>Geografia</h2>
				<div class="cards-geografia">
					<div class="border">
						<h3>Clima</h3>
						<p><?php echo $exibe_cidade[0]['text_clima'];?></p>
					</div>

					<div class="border">
						<h3>Vegetação</h3>
						<p><?php echo $exibe_cidade[0]['text_vegetacao'];?></p>
					</div>

					<div>
						<h3>Relevo</h3>
						<p><?php echo $exibe_cidade[0]['text_relevo'];?></p>
					</div>
				</div>
			</div>

			<div class="img-geografia">
				<img src="<?php echo $exibe_cidade[0]['imagem_inicio'];?>">
			</div>
		</section>

		<section id="economia">
			<div class="img-economia">
				<img src="<?php echo $exibe_cidade[0]['imagem_economia'];?>">
			</div>

			<div class="text-economia">
				<h2>Econômia</h2>
				<p><?php echo $exibe_cidade[0]['text_economia'];?></p>
			</div>
		</section>

		<section id="cultura">
			<div class="text-cultura">
				<h2>Cultura</h2>
				<p><?php echo $exibe_cidade[0]['text_cultura'];?></p>
			</div>
			<div class="img-cultura">
				<img src="<?php echo $exibe_cidade[0]['imagem_cultura'];?>">
			</div>
		</section>

		<section id="turismo">
			<div class="container-turismo">
				<h2>Pontos Turísticos</h2>
				<div class="cards-turismo">
					<a href="#">
						<img src="https://a.cdn-hotels.com/gdcs/production95/d1124/49c122de-7b35-453d-83c9-ead69d9816a6.jpg">
						<div class="text-turismo">
							<h4>Pão de Açúcar</h4>
							<p>Na Cidade Maravilhosa, a lista de pontos turísticos é grande, mas o conjunto de morros está dentre os mais estonteantes e visitados. Com 395 m de altura, o Pão de Açúcar é lindo de se ver mesmo de longe, mas também rende um passeio muito agradável de bondinho e uma visão 360° da cidade.</p>
						</div>
					</a>

					<a href="#" class="active">
						<img src="https://a.cdn-hotels.com/gdcs/production95/d1124/49c122de-7b35-453d-83c9-ead69d9816a6.jpg">
						<div class="text-turismo">
							<h4>Pão de Açúcar</h4>
							<p>Na Cidade Maravilhosa, a lista de pontos turísticos é grande, mas o conjunto de morros está dentre os mais estonteantes e visitados. Com 395 m de altura, o Pão de Açúcar é lindo de se ver mesmo de longe, mas também rende um passeio muito agradável de bondinho e uma visão 360° da cidade.</p>
						</div>
					</a>

					<a href="#" class="active">
						<img src="https://a.cdn-hotels.com/gdcs/production95/d1124/49c122de-7b35-453d-83c9-ead69d9816a6.jpg">
						<div class="text-turismo">
							<h4>Pão de Açúcar</h4>
							<p>Na Cidade Maravilhosa, a lista de pontos turísticos é grande, mas o conjunto de morros está dentre os mais estonteantes e visitados. Com 395 m de altura, o Pão de Açúcar é lindo de se ver mesmo de longe, mas também rende um passeio muito agradável de bondinho e uma visão 360° da cidade.</p>
						</div>
					</a>

					<a href="#" class="active">
						<img src="https://a.cdn-hotels.com/gdcs/production95/d1124/49c122de-7b35-453d-83c9-ead69d9816a6.jpg">
						<div class="text-turismo">
							<h4>Pão de Açúcar</h4>
							<p>Na Cidade Maravilhosa, a lista de pontos turísticos é grande, mas o conjunto de morros está dentre os mais estonteantes e visitados. Com 395 m de altura, o Pão de Açúcar é lindo de se ver mesmo de longe, mas também rende um passeio muito agradável de bondinho e uma visão 360° da cidade.</p>
						</div>
					</a>

					<a href="#">
						<img src="https://a.cdn-hotels.com/gdcs/production95/d1124/49c122de-7b35-453d-83c9-ead69d9816a6.jpg">
						<div class="text-turismo">
							<h4>Pão de Açúcar</h4>
							<p>Na Cidade Maravilhosa, a lista de pontos turísticos é grande, mas o conjunto de morros está dentre os mais estonteantes e visitados. Com 395 m de altura, o Pão de Açúcar é lindo de se ver mesmo de longe, mas também rende um passeio muito agradável de bondinho e uma visão 360° da cidade.</p>
						</div>
					</a>
				</div>
			</div>

			<div class="img-turismo">
				<img src="<?php echo $exibe_cidade[0]['imagem_inicio'];?>">
			</div>
		</section>

		<section id="comentarios">
			<h2>Comentários</h2>
			<div class="container-comentarios">
				<div class="card-comentarios">
					<div class="identifiacacao">
						<img src="https://i.pinimg.com/474x/2f/3d/69/2f3d69d3189a0c47b931c0c0254fda21.jpg">
						<div>
							<h4>Nome</h4>
							<p>nome@teste.com</p>
						</div>
					</div>

					<div class="text-comentario">
						<p>jewqjeqiprpwiejdpçasdjosajfó</p>
					</div>
				</div>
				<div class="card-comentarios">
					<div class="identifiacacao">
						<img src="https://i.pinimg.com/474x/2f/3d/69/2f3d69d3189a0c47b931c0c0254fda21.jpg">
						<div>
							<h4>Nome</h4>
							<p>nome@teste.com</p>
						</div>
					</div>

					<div class="text-comentario">
						<p>jewqjeqiprpwiejdpçasdjosaj</p>
					</div>
				</div>

				<div class="card-comentarios">
					<div class="identifiacacao">
						<img src="https://i.pinimg.com/474x/2f/3d/69/2f3d69d3189a0c47b931c0c0254fda21.jpg">
						<div>
							<h4>Nome</h4>
							<p>nome@teste.com</p>
						</div>
					</div>

					<div class="text-comentario">
						<p>jewqjeqiprpwiejdpçasdjosajfó</p>
					</div>
				</div>
			</div>
		</section>

	</main>

		<footer>
			<div>
				<h2>HelloWorld</h2>
			</div>
			<img src="https://www.queroviajarmais.com/wp-content/uploads/2020/08/rio-de-janeiro-fotos.jpg">
		</footer>

</body>
</html>