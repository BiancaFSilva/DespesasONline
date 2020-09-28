<?php
    include '../conecta.php';
    session_start();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $nivel = $_POST['nivel'];

    $consulta = "INSERT INTO usuario (nome, email, senha, nivel) VALUES ('$nome', '$email', '$senha', '$nivel')";
    $conexao -> query($consulta);

    header('Location: restrita.php');
?>
