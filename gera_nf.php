<?php 
	include 'conecta.php';
	session_start();

    $data_atual = $_POST['data'];

    $consulta = $conexao -> prepare("INSERT INTO nota_fiscal (data) VALUES ('$data_atual')");
    $consulta -> execute();

    header('Location: seleciona_ultima_nf.php');
?>