<!DOCTYPE html>
<html>
<head>
	<title>Home HelloWorld</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-menu.css">
</head>
<body>

	<?php
		include ("./menu.php");
	?>

	<main class="page-adm">

        <section class="inicio">
            <div>
                <h1>Administradores</h1>
                <button><a href="../forms-add/add-adm.php">Adicionar</a></button>
            </div>
            <img src="https://viagemeturismo.abril.com.br/wp-content/uploads/2016/12/14179421596_b95c10db10_o.jpeg" class="img-fundo">
        </section>

        <section class="container">
            <table>
                <thead>
                    <tr class="row">
                        <th class="col-1">ID</th>
                        <th class="col-4">Nome</th>
                        <th class="col-4">Email</th>
                        <th class="col-2">Data de Nacimento</th>
                        <th class="col-1"></th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="row">
                        <td class="col-1">01</td>
                        <td class="col-4">01</td>
                        <td class="col-4">01</td>
                        <td class="col-2">01</td>
                        <td class="col-1"><button>Del</button></td>
                    </tr>

                    <tr class="row">
                        <td class="col-1">01</td>
                        <td class="col-4">01</td>
                        <td class="col-4">01</td>
                        <td class="col-2">01</td>
                        <td class="col-1"><button>Del</button></td>
                    </tr>
                </tbody>
            </table>
        </section>

	</main>
</body>
</html>