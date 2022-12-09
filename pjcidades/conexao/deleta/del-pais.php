<?php

    include ("./conexao.php");

    $id = $_GET['id'];
    $deletar = mysqli_query($cn, "DELETE FROM `pais` WHERE `id` = '$id'");
    header("Location: ../../cods/adm1/pages-menu/pais.php");
?>