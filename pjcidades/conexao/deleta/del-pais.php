<?php

    include ("./conexao.php");

    $id = $_GET['id'];
    $deletar = mysqli_query($cn, "DELETE FROM `pais` WHERE `id` = '$id'");
    header("Location: ../../adm1/pages-menu/lista-paises.php");
?>