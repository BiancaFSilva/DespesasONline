<?php
    include '../conecta.php';
    session_start();

    if ((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome']) == true) && 
    (!isset($_SESSION['email']) == true) && (!isset($_SESSION['nivel']) == true)) {
        header ('Location: ../index.php');
    } else {
        header ('Location: ../login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Página restrita</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>Olá <?php echo $_SESSION['nome']; ?>, seja bem-vindo!</h3>
        <p>O que deseja fazer?</p>
        <a class="btn btn-primary" href="logout.php"> Sair </a>
    </body>
</html>