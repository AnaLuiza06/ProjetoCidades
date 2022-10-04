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
	?>
	<main class="main-forms">
		<form>
			<h2>Adicionar Administrador</h2>
			<div class="card-form">
				<div class="input-form">
					<label>Nome</label>
					<input type="text" name="nome">
				</div>
				<div class="input-form">
					<label>Email</label>
					<input type="email" name="email">
				</div>
                <div class="input-form">
					<label>Data de nascimento</label>
					<input type="date" name="data_nascimento">
				</div>

                <div class="input-form">
					<label>Senha</label>
					<input type="passwold" name="senha">
				</div>
			</div>
			<button type="submit" class="btn btn-primary" style="background-color: #3475F4;">Enviar</button>
		</form>
	</main>

</body>
</html>