<?php
    $servidor = "localhost";
    $banco = "despesas"; // quando for entregar é o despesas
    $usuario = "root";
    $senha = "";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if ($conexao -> connect_error) {
        echo "Erro de conexão";
    } else {
        //echo "Conectado";
    }
?>