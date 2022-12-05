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

        $consulta_distrito = mysqli_query($cn, "SELECT * FROM `distrito`");
	 	$exibe_distrito = mysqli_fetch_all($consulta_distrito, MYSQLI_ASSOC);
	?>

	<main class="page-adm">

        <section id="inicio">
            <div class="container-inicio">
                <div class="text-inicio">
                    <h1>Distrito</h1>
                    <button><a href="../forms-add/add-distrito.php">Adiciona</a></button>
                </div>
            </div>

            <img src="https://viagemeturismo.abril.com.br/wp-content/uploads/2016/12/14179421596_b95c10db10_o.jpeg" class="img-inicio">
        </section>

        <section class="container">
			<div class="row">
                <?php
                    for($i=0; $i<count($exibe_distrito); $i++){
                        $id_cidade = $exibe_distrito[$i]['id_cidade'];
                        $consulta_cidade = mysqli_query($cn, "SELECT * FROM `cidade` WHERE `id` = '$id_cidade'");
                        $exibe_cidade = mysqli_fetch_all($consulta_cidade, MYSQLI_ASSOC);
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-3">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $exibe_distrito[$i]['imagem_inicio'];?>" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5><?php echo $exibe_distrito[$i]['nome'];?></h5>
                                <h6><?php echo $exibe_cidade[0]['nome'];?></h6>
                                <div class="btns-cards">
                                    <button>
                                        <a href="../forms-update/up-distrito.php?id=<?php echo $exibe_distrito[$i]['id'];?>">Alterar</a>
                                    </button>
                                    <button>
                                        <a href="../../../conexao/deleta/del-distrito.php?id=<?php echo$exibe_distrito[$i]['id'];?>">Deletar</a>
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