<?php
    include 'conecta.php';

    $preco = $_POST['preco'];
    $nome_produto = $_POST['nome'];

    $consulta = $conexao -> prepare("INSERT INTO produtos (nome, preco) VALUES ('$nome_produto', '$preco')");
    $consulta -> execute();

    header('Location: ver_produtos.php');
?>