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

        include ("./conexao.php");

        $consulta_pais = mysqli_query($cn, "SELECT * FROM `pais`");
	    $exibe_pais = mysqli_fetch_all($consulta_pais, MYSQLI_ASSOC);
	?>

	<main class="page-adm">

        <section class="inicio">
            <div>
                <h1>Paises</h1>
                <button><a href="../forms-add/add-pais.php">Adicionar</a></button>
            </div>
            <img src="https://viagemeturismo.abril.com.br/wp-content/uploads/2016/12/14179421596_b95c10db10_o.jpeg" class="img-fundo">
        </section>

        <section class="container">
			<div class="row">

                <?php
                    for($i = 0; $i < count($exibe_pais); $i++){

                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://www.turismoecia.net/wp-content/uploads/2020/01/01-Centro-Hist%C3%B3rico-01.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5><?php echo $exibe_pais[$i]['nome']?></h5>
                                <p class="card-text">Nome Oficial: <?php echo $exibe_pais[$i]['nome_oficial']?></p>
                                <p class="card-text">Nome Oficial: <?php echo $exibe_pais[$i]['localizacao']?></p>
                                <div class="btns-cards">
                                    <button>
                                        <a href="#">Alterar</a>
                                    </button>
                                    <button>
                                        <a href="#">Deletar</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>

            </div>
        </section>

	</main>
</body>
</html>