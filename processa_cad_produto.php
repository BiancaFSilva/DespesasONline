<?php 
    include 'conecta.php';
    session_start();

    $nivel = $_SESSION['nivel'];

    if ($nivel != 2) {
        header ('Location: cadastra_produto.php');
    } else {
        echo "<script type='text/javascript'> alert('Apenas administradores podem cadastrar produtos.'); </script>";
        header ('Location: index.php');
    }
?>