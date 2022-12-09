<?php

    include ("./conexao.php");

    $pagina = $_POST['pagina'];
    $pesquisa = $_POST['pesquisar'];

    $consulta = mysqli_query($cn, "SELECT * FROM $pagina WHERE nome like '$pesquisa'");
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    if(count($exibe) > 0){
        print_r($exibe);
        print_r($pesquisa);
        //header("Location: ../cods/adm1/pages-menu/".$pagina.".php?cd=".$pesquisa."");
    }
    else{
        //header("Location: ../cods/adm1/home_adm.php");
    }
?>