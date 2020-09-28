<?php 
    include '../conecta.php';
    session_start();

    unset(
        $_SESSION['nf']
    );

    header('Location: ../login.php');
?>