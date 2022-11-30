<?php

    include ("./conexao.php");

    $id = $_GET['id'];
    $deletar = mysqli_query($cn, "DELETE FROM `cidade` WHERE `id` = '$id'");
    header("Location: ../../cods/adm1/pages-menu/lista-cidades.php");
?>