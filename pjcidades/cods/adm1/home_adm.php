<!DOCTYPE html>
<html>
<head>
	<title>Home HelloWorld</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style-menu.css">
</head>
<body>

	<?php
		include ("./menu.php");
	?>

	<main class="home-adm">
		<img src="https://viagemeturismo.abril.com.br/wp-content/uploads/2016/12/14179421596_b95c10db10_o.jpeg" class="img-fundo">

		<section class="pesquisar">
			<h1>Tenha acesso a todos os cunteúdos do HelloWorld</h1>
			<form>
				<div>
					<select>
						<option value="pais">País</option>
						<option value="regiao">Região</option>
						<option value="estado">Estado</option>
						<option value="cidade">Cidade</option>
						<option value="">Ponto Turístico</option>
					</select>
					<input type="test" name="perquisar">
				</div>
				<button type="submit">Pesquisar</button>
			</form>
		</section>

		<section class="numeros">
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

			<div>
				<h1>00</h1>
				<p>Comentários</p>
			</div>

			<div>
				<h1>00</h1>
				<p>Administradores</p>
			</div>
		</section>
	</main>
</body>
</html>