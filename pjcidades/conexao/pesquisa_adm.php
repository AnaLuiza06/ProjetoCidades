<?php

    include ("./conexao.php");

    $pagina = $_POST['pagina'];
    $pesquisa = $_POST['pesquisar'];

    $consulta = mysqli_query($cn, "SELECT * FROM $pagina WHERE nome = '$pesquisa'");
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    print_r($exibe);

    if(count($exibe) > 0){
        //header("Location: ../cods/adm1/pages-menu/".$pagina.".php?cd=".$pesquisa."");
    }
    else{
        //header("Location: ../cods/adm1/home_adm.php");
    }
?>