<link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../image/inlines2.png">

<?php
    //session_start();
    $codusuario = 1; // Depois precisamos alterar para pegar da $_SESSION
    include "finalizacao_compra_back.php";

    echo "<h1>Compra Finalizada com Sucesso!!!</h1>";
?>

<a href="selecao_produtos_front.php">Voltar</a>