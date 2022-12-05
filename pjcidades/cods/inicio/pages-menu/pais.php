<!DOCTYPE html>
<html>
<head>
	<title>Home HelloWorld</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
    <link rel="stylesheet" type="text/css" href="../../../css/style-menu.css">
</head>
<body>

	<?php
		include ("./menu.php");
        include ("./conexao.php");
	?>

	<main class="page-adm">

        <section id="inicio">
            <div class="container-inicio">
                <div class="text-inicio">
                    <h1>Países</h1>
                </div>
            </div>

            <img src="https://viagemeturismo.abril.com.br/wp-content/uploads/2016/12/14179421596_b95c10db10_o.jpeg" class="img-inicio">
        </section>

        <section id="regioes">

            <div class="text-regioes">
                <div class="text-intro">
                    <p class="desc-pais">Tenha acesso aos dados de todos os países, sabendo mais da história, sua geografia, economia e cultura.</p>
                    <h1>+ de 25 Regiões inseridas</h1>
                </div>
            </div>
        </section>


        <section class="container">
			<div class="row">
                <?php
                    $consulta_pais = mysqli_query($cn, "SELECT * FROM `pais`");
                    $exibe_pais = mysqli_fetch_all($consulta_pais, MYSQLI_ASSOC);

                    for ($i=0; $i < count($exibe_pais); $i++) { 
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://www.turismoecia.net/wp-content/uploads/2020/01/01-Centro-Hist%C3%B3rico-01.jpg" alt="Imagem de capa do card">
                            <div class="card-body">
                                <div>
                                    <h3><?php echo $exibe_pais[$i]['nome']?></h3>
                                    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                                    <button><a href="../pais.php?id=<?php echo $exibe_pais[$i]['id']?>">Saber Mais</a></button>
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