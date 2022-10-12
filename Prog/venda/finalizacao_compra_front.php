<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Finalização da Compra</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="shortcut icon" href="../../image/logo.png">
    </head>
    
    <body>

        <div class="menu">
            <input type="checkbox" id="check">

            <header>
                <label for="check">
                    <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
                </label>


                <div class="left">
                    <h3>In <span>Lines</span></h3>
                </div>

                <div class="right">
                    <a href="carrinho_front.php" class="carrinho">
                        <ion-icon name="cart"></ion-icon>
                    </a>
                    <a href="../usuarios/cad_pesq_usuario_front.php" class="conta">
                        <ion-icon name="person-outline"></ion-icon>
                    </a>
                </div>

            </header>
            <div class="sidebar">
                <center>
                    <img src="../../image/inlines.png" class="img" alt="In Lines">
                    <h2>Menu</h2>
                </center>

                <a href="../../index.html">
                    <!-- <ion-icon name="home"></ion-icon></i><span>Home</span> -->
                    <i class="fa-brands fa-octopus-deploy"></i></i><span> Home</span>
                </a>
                <a href="../produtos/cad_pesq_produtos_front.php">
                    <ion-icon name="cart"></ion-icon><span>Produtos</span>
                </a>
                <!-- <a href="Prog/usuarios/cad_pesq_usuario_front.php">
                    <ion-icon name="body"></ion-icon><span>Usuários</span>
                </a> -->
                <a href="selecao_produtos_front.php">
                    <ion-icon name="bag-check-outline"></ion-icon><span>Vendas</span>
                </a>
                <a href="../devs.html">
                    <ion-icon name="code"></ion-icon><span>Devs</span>
                </a>

                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>

            </div> <!-- sidebar -->
        </div> <!-- menu -->

        <div class="mae">
            <div class="container">
                <?php
                    //session_start();
                    $id_usuario = 1; // Depois precisamos alterar para pegar da $_SESSION
                    include "finalizacao_compra_back.php";

                    echo "<h1>Compra Finalizada com Sucesso!!!</h1>";
                ?>

                <a href="selecao_produtos_front.php">Voltar</a>
            
            <div class="container">
        <div class="mae">
    </body>
</html>

