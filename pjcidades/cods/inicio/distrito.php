<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Projeto Cidades</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
	<link rel="stylesheet" type="text/css" href="../../css/style-menu.css">
</head>
<body>
	<!-- Incluir Menu -->
	<?php 
		include ("./menu.php");
		include ("./pages-menu/conexao.php");
		$id = $_GET['id'];

		 $consulta_distrito = mysqli_query($cn, "SELECT * FROM `distrito` WHERE `id` = '$id'");
         $exibe_distrito = mysqli_fetch_all($consulta_distrito, MYSQLI_ASSOC);
	?>

	<main>
		<section id="inicio">
			<div class="container-inicio">
				<div class="text-inicio">
					<h1><?php echo $exibe_distrito[0]['nome'];?></h1>
				</div>
			</div>

			<img src="<?php echo $exibe_distrito[0]['imagem_inicio'];?>" class="img-inicio">
		</section>
		
		<section id="regioes">

			<div class="text-regioes">
				<div class="numeros">
						<h2>Dados</h2>
					</div>
					<div class="informacoes">
						<p>Nome Oficioal: <?php echo $exibe_distrito[0]['nome_oficial'];?></p>
						<p>Número de Habitantes: <?php echo $exibe_distrito[0]['populacao'];?></p>
						<p>Área Territorial: <?php echo $exibe_distrito[0]['area'];?></p>
						<p>PIB: <?php echo $exibe_distrito[0]['pib'];?></p>
						<p>IDH: <?php echo $exibe_distrito[0]['idh'];?></p>
					</div>
			</div>
		</section>

		<section id="historia">
			<div class="img-historia">
				<img src="<?php echo $exibe_distrito[0]['imagem_historia'];?>">
			</div>
			<div class="text-historia">
				<h2>História</h2>
				<p><?php echo $exibe_distrito[0]['text_historia'];?></p>
			</div>
		</section>

		<section id="geografia">
			<div class="container-geografia">
				<h2>Geografia</h2>
				<div class="cards-geografia">
					<div>
						<h3>Clima</h3>
						<p><?php echo $exibe_distrito[0]['text_clima'];?></p>
					</div>

					<div>
						<h3>Vegetação</h3>
						<p><?php echo $exibe_distrito[0]['text_vegetacao'];?></p>
					</div>

					<div>
						<h3>Relevo</h3>
						<p><?php echo $exibe_distrito[0]['text_relevo'];?></p>
					</div>
				</div>
			</div>

			<div class="img-geografia">
				<img src="<?php echo $exibe_distrito[0]['imagem_inicio'];?>">
			</div>
		</section>

		<section id="economia">
			<div class="img-economia">
				<img src="<?php echo $exibe_distrito[0]['imagem_economia'];?>">
			</div>

			<div class="text-economia">
				<h2>Econômia</h2>
				<p><?php echo $exibe_distrito[0]['text_economia'];?></p>
			</div>
		</section>

		<section id="cultura">
			<div class="text-cultura">
				<h2>Cultura</h2>
				<p><?php echo $exibe_distrito[0]['text_cultura'];?></p>
			</div>
			<div class="img-cultura">
				<img src="<?php echo $exibe_distrito[0]['imagem_cultura'];?>">
			</div>
		</section>

		<section id="turismo">
			<div class="container-turismo">
				<h2>Pontos Turísticos</h2>
				<div class="cards-turismo">
						<?php
								$consulta_pturistico = mysqli_query($cn, "SELECT * FROM `pturistico` WHERE `id_distrito` = '$id'");
								$exibe_pturistico = mysqli_fetch_all($consulta_pturistico, MYSQLI_ASSOC);

							for($i=0; $i<count($exibe_pturistico); $i++){
								$id_cidade = $exibe_pturistico[$i]['id_cidade'];
								$consulta_cidade = mysqli_query($cn, "SELECT * FROM `cidade` WHERE `id` = '$id_cidade'");
								$exibe_cidade = mysqli_fetch_all($consulta_cidade, MYSQLI_ASSOC);

								if($exibe_pturistico[$i]['id'] > 0){

						?>
							<div class="">
								<div class="card">
									<img class="card-img-top" src="<?php echo $exibe_pturistico[$i]['imagem_inicio'];?>" alt="Imagem de capa do card">
									<div class="card-body">
										<div>
											<h5><?php echo $exibe_pturistico[$i]['nome'];?></h5>
											<h6><?php echo $exibe_cidade[0]['nome'];?></h6>
											<button><a href="./pturistico.php?id=<?php echo $exibe_pturistico[$i]['id'];?>">Saber Mais</a></button>
										</div>
									</div>
								</div>
							</div>
						<?php
								}
							}
						?>
				</div>
			</div>

			<div class="img-turismo">
				<img src="<?php echo $exibe_distrito[0]['imagem_inicio'];?>">
			</div>
		</section>

	</main>

		<footer>
			<div>
				<h2>HelloWorld</h2>
			</div>
			<img src="https://www.queroviajarmais.com/wp-content/uploads/2020/08/rio-de-janeiro-fotos.jpg">
		</footer>
		
		<script src="../../js/carrossel.js"></script>
</body>
</html>