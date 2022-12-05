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
		$consulta_pturistico = mysqli_query($cn, "SELECT * FROM `pturistico` WHERE `id` = '$id'");
        $exibe_pturistico = mysqli_fetch_all($consulta_pturistico, MYSQLI_ASSOC);
	?>

	<main>
		<section id="inicio">
			<div class="container-inicio">
				<div class="text-inicio">
					<h1><?php $exibe_pturistico[0]['nome'];?></h1>
				</div>
			</div>

			<img src="<?php $exibe_pturistico[0]['imagem_inicio'];?>" class="img-inicio">
		</section>
		
		<section id="regioes">

			<div class="text-regioes">
				<div class="numeros">
						<h2>Dados</h2>
					</div>
					<div class="informacoes">
						<p>Tipo de Obra: <?php $exibe_pturistico[0]['tipo'];?></p>
						<p>Responsável: <?php $exibe_pturistico[0]['responsavel'];?></p>
						<p>Localização: <?php $exibe_pturistico[0]['localizacao'];?></p>
						<p>Área: <?php $exibe_pturistico[0]['area'];?></p>
						<p>Existe desde: <?php $exibe_pturistico[0]['data_construcao'];?></p>
					</div>
			</div>
		</section>

		<section id="historia">
			<div class="img-historia">
				<img src="<?php $exibe_pturistico[0]['imagem_historia'];?>">
				<div></div>
			</div>
			<div class="container-historia">
				<div></div>
				<div class="text-historia">
					<h2>História</h2>
					<p><?php $exibe_pturistico[0]['text_historia'];?></p>
				</div>
			</div>
		</section>

		<section id="bandeira">
			<div class="text-bandeira">
				<h2>Curiosidades</h2>
				<p><?php echo $exibe_pturistico[0]['text_curiosidades'];?></p>
			</div>
			<div class="img-bandeira">
				<img src="<?php echo $exibe_pturistico[0]['imagem_curiosidades'];?>">
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