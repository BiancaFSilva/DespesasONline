<?php 
    include 'conecta.php';
    if (!isset($_SESSION)) session_start();

    $nf = $_SESSION['nf'];
    $id_prod = $_POST['id_prod'];
    $qtde = $_POST['qtde'];
    $subtotal = $_POST['subtotal'];

    echo "NF: " . $nf . "<br>";
    echo "Id_produto: " . $id_prod . "<br>";
    echo "Qtde: " . $qtde . "<br>";
    echo "Subtotal" . $subtotal . "<br>";

    $consulta = $conexao -> prepare("INSERT INTO itens_nf (cod_produto, num_nf, qtde, subtotal) VALUES ('$id_prod', '$nf', '$qtde', '$subtotal')");
    $consulta -> execute();
    header ('Location: confirma_item.php');
?>