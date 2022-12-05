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

        $consulta_estado= mysqli_query($cn, "SELECT * FROM `estado`");
        $exibe_estado = mysqli_fetch_all($consulta_estado, MYSQLI_ASSOC);
	?>

	<main class="page-adm">

        <section id="inicio">
            <div class="container-inicio">
                <div class="text-inicio">
                    <h1>Estados</h1>
                </div>
            </div>

            <img src="https://viagemeturismo.abril.com.br/wp-content/uploads/2016/12/14179421596_b95c10db10_o.jpeg" class="img-inicio">
        </section>

        <section id="regioes">

            <div class="text-regioes">
                <div class="text-intro">
                    <p class="desc-pais">Tenha acesso aos dados de todos os países, sabendo mais da história, sua geografia, economia e cultura.</p>
                    <h1>+ de <?php echo count($exibe_estado);?> Regiões inseridas</h1>
                </div>
            </div>
        </section>

        <section class="container">
			<div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-3">
                     <?php
                        for($i = 0; $i < count($exibe_estado); $i++){

                        $id_pais = $exibe_estado[$i]['id_pais'];
                        $consulta_pais= mysqli_query($cn, "SELECT * FROM `pais` WHERE `id` = '$id_pais'");
                        $exibe_pais = mysqli_fetch_all($consulta_pais, MYSQLI_ASSOC);
                    ?>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $exibe_estado[$i]['imagem_inicio'];?>" alt="Imagem de capa do card">
                            <div class="card-body">
                                <div>
                                    <h5><?php echo $exibe_estado[$i]['nome'];?></h5>
                                    <h6><?php echo $exibe_pais[0]['nome'];?></h6>
                                    <p class="card-text"><?php echo $exibe_estado[$i]['descricao'];?></p>
                                    <button><a href="../estado.php?id=<?php echo $exibe_estado[$i]['id'];?>">Saber Mais</a></button>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>

	</main>
</body>
</html>