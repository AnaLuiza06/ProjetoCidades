<!DOCTYPE html>
<html>
<head>
	<title>Home HelloWorld</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../../css/style-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
</head>
<body>

	<?php
		include ("./menu.php");
        include ("./conexao.php");

        $pesquisa = $_GET['cd'];

        $consulta_pais = mysqli_query($cn, "SELECT * FROM `pais`");
	    $exibe_pais = mysqli_fetch_all($consulta_pais, MYSQLI_ASSOC);
	?>

	<main class="page-adm">

        <section id="inicio">
            <div class="container-inicio">
                <div class="text-inicio">
                    <h1>Paises</h1>
                    <button><a href="../forms-add/add-pais.php">Adicionar</a></button>
                </div>
            </div>

            <img src="https://viagemeturismo.abril.com.br/wp-content/uploads/2016/12/14179421596_b95c10db10_o.jpeg" class="img-inicio">
        </section>

        <section class="container">
            
			<div class="row">

                <div class="card-pesquisa">
                <?php  
                    if ($pesquisa != "false") {
                        
                        $consulta_pesquisa = mysqli_query($cn, "SELECT * FROM `pais` WHERE nome = '$pesquisa'");
                        $exibe_pesquisa = mysqli_fetch_all($consulta_pesquisa, MYSQLI_ASSOC);

                        for ($i=0; $i < count($exibe_pesquisa); $i++) { 
                        
                ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $exibe_pesquisa[$i]['imagem_inicio']?>" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <h5><?php echo $exibe_pesquisa[$i]['nome']?></h5>
                                        <p class="card-text">Nome Oficial: <?php echo $exibe_pesquisa[$i]['nome_oficial']?></p>
                                        <p class="card-text">Localiza????o: <?php echo $exibe_pesquisa[$i]['localizacao']?></p>
                                        <div class="btns-cards">
                                            <button>
                                                <a href="../forms-update/up-pais.php?id=<?php echo $exibe_pesquisa[$i]['id'];?>">Alterar</a>
                                            </button>
                                            <button>
                                                <a href="../../../conexao/deleta/del-pais.php?id=<?php echo $exibe_pesquisa[$i]['id']?>">Deletar</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }

                ?>
            </div>
            
                <?php
                    for($i = 0; $i < count($exibe_pais); $i++){

                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $exibe_pais[$i]['imagem_inicio']?>" alt="Imagem de capa do card">
                            <div class="card-body">
                                <h5><?php echo $exibe_pais[$i]['nome']?></h5>
                                <p class="card-text">Nome Oficial: <?php echo $exibe_pais[$i]['nome_oficial']?></p>
                                <p class="card-text">Localiza????o: <?php echo $exibe_pais[$i]['localizacao']?></p>
                                <div class="btns-cards">
                                    <button>
                                        <a href="../forms-update/up-pais.php?id=<?php echo $exibe_pais[$i]['id'];?>">Alterar</a>
                                    </button>
                                    <button>
                                        <a href="../../../conexao/deleta/del-pais.php?id=<?php echo $exibe_pais[$i]['id']?>">Deletar</a>
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