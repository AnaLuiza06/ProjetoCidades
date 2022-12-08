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
		include ("./pages-menu/conexao.php");
	?>

	<main class="home-adm">
		<img src="https://viagemeturismo.abril.com.br/wp-content/uploads/2016/12/14179421596_b95c10db10_o.jpeg" class="img-fundo">

		<section class="pesquisar">
			<div>
				<h1>Tenha acesso a todos os cunteúdos do HelloWorld</h1>
				<form method="post" action="../../conexao/pesquisa_adm.php">
					<div>
						<select name="pagina">
							<option value="pais">País</option>
							<option value="regiao">Região</option>
							<option value="estado">Estado</option>
							<option value="cidade">Cidade</option>
							<option value="pturistico">Ponto Turístico</option>
						</select>
						<input type="test" name="perquisar">
					</div>
					<button type="submit">Pesquisar</button>
				</form>
			</div>
		</section>

		<section class="numeros">
			<div>
				<?php
					$consulta_pais = mysqli_query($cn, "SELECT * FROM `pais`");
	 				$exibe_pais = mysqli_fetch_all($consulta_pais, MYSQLI_ASSOC);

	 				if (count($exibe_pais) > 9) {
	 					echo "<h1>".count($exibe_pais)."</h1>";	
	 				}

	 				else{
	 					echo "<h1>0".count($exibe_pais)."</h1>";	
	 				}
				?>
				
				<p>Países</p>
			</div>

			<div>
				<?php
					$consulta_regiao = mysqli_query($cn, "SELECT * FROM `regiao`");
	 				$exibe_regiao = mysqli_fetch_all($consulta_regiao, MYSQLI_ASSOC);

	 				if (count($exibe_regiao) > 9) {
	 					echo "<h1>".count($exibe_regiao)."</h1>";	
	 				}

	 				else{
	 					echo "<h1>0".count($exibe_regiao)."</h1>";	
	 				}
				?>
				<p>Regiões</p>
			</div>

			<div>
				<?php
					$consulta_estado = mysqli_query($cn, "SELECT * FROM `estado`");
	 				$exibe_estado = mysqli_fetch_all($consulta_estado, MYSQLI_ASSOC);

	 				if (count($exibe_estado) > 9) {
	 					echo "<h1>".count($exibe_estado)."</h1>";	
	 				}

	 				else{
	 					echo "<h1>0".count($exibe_estado)."</h1>";	
	 				}
				?>
				<p>Estados</p>
			</div>

			<div>
				<?php
					$consulta_cidade = mysqli_query($cn, "SELECT * FROM `cidade`");
	 				$exibe_cidade = mysqli_fetch_all($consulta_cidade, MYSQLI_ASSOC);

	 				if (count($exibe_cidade) > 9) {
	 					echo "<h1>".count($exibe_cidade)."</h1>";	
	 				}

	 				else{
	 					echo "<h1>0".count($exibe_cidade)."</h1>";	
	 				}
				?>
				<p>Cidades</p>
			</div>

			<div>
				<?php
					$consulta_pturistico = mysqli_query($cn, "SELECT * FROM `pturistico`");
	 				$exibe_pturistico = mysqli_fetch_all($consulta_pturistico, MYSQLI_ASSOC);

	 				if (count($exibe_pturistico) > 9) {
	 					echo "<h1>".count($exibe_pturistico)."</h1>";	
	 				}

	 				else{
	 					echo "<h1>0".count($exibe_pturistico)."</h1>";	
	 				}
				?>
				<p>P. Turísticos</p>
			</div>

			<div>
				<?php
					$consulta_adm = mysqli_query($cn, "SELECT * FROM `adm`");
	 				$exibe_adm = mysqli_fetch_all($consulta_adm, MYSQLI_ASSOC);

	 				if (count($exibe_adm) > 9) {
	 					echo "<h1>".count($exibe_adm)."</h1>";	
	 				}

	 				else{
	 					echo "<h1>0".count($exibe_adm)."</h1>";	
	 				}
				?>
				<p>Administradores</p>
			</div>
		</section>
	</main>
</body>
</html>