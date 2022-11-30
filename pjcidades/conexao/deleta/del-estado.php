<?php

    include ("./conexao.php");

    $id = $_GET['id'];
    $deletar = mysqli_query($cn, "DELETE FROM `estado` WHERE `id` = '$id'");
    header("Location: ../../cods/adm1/pages-menu/lista-estados.php");
?>