<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Finalização da Compra</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="shortcut icon" href="../../image/icon.png">

        <script>
            function cliqui() {
                document.getElementById("check").click();
            }
        </script>
    </head>
    
    <body onload="cliqui(),select()">

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
                    <img src="../../image/InLines.png" class="img" alt="In Lines">
                    <h2>Menu</h2>
                </center>

                <a href="../../index.html">
                    <ion-icon name="home"></ion-icon></i><span> Home</span>
                </a>
                <a href="../produtos/cad_pesq_produtos_front.php">
                    <ion-icon name="cart"></ion-icon><span>Cad. Produtos</span>
                </a>
                <!-- <a href="Prog/usuarios/cad_pesq_usuario_front.php">
                    <ion-icon name="body"></ion-icon><span>Usuários</span>
                </a> -->
                <a href="selecao_produtos_front.php">
                    <i class="fa-brands fa-octopus-deploy"></i><span> Produtos</span>
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
                <div class="quadro">
                <?php
                    //session_start();
                    $id_usuario = 1; // Depois precisamos alterar para pegar da $_SESSION
                    include "finalizacao_compra_back.php";


                    // echo "<img src='../../image/celebracao.png' class='card-img' width=300px>";


// <<<<<<< HEAD
                    echo "<h1>&nbsp Compra Finalizada com Sucesso!!!</h1><br>";
                    echo "<h3>&nbsp Ficamos muito felizes pela preferência!</h3><br>";
                    echo "<div>";
                    echo"<a href='selecao_produtos_front.php'><input type='submit' value='Voltar' class='button_prod_front'></a><br><br>";
                    // echo "<input type='submit'  value='Voltar' class='button_prod_front'  onclick='location.href='cad_pesq_usuario_front.php';'>";
// =======
                    echo "<h1>Compra Finalizada com Sucesso!!!</h1><br>";
                    echo "<div>";
                    echo"<input type='submit' value='Voltar' class='button_prod_front' onclick='location.href='cad_pesq_usuario_front.php''><br><br>";
// >>>>>>> 41cce5db66bd5a4eaae978fadb7bc7cb51126422
                    echo "</div>";


                    
                    // echo "<div class='card card-1'>";

                    // <!-- card-header -->
                    // echo "<div class='card-header'>";
                    //     echo "<img src='../../image/celebracao.png' class='card-img'>";
                    // echo "</div>";
                    // <!-- card-header -->

                    // <!-- card-body -->
                    // echo "<div class='card-body'>
                    //     <h3 class='card-local'>Volte sempre!</h3>
                    //     <h2 class='card-titulo'>Obrigada!!</h2>
                    //     <h3>Compra Finalizada com Sucesso!!!</h3>";
                    // echo "</div>";
                    // <!-- card-body -->

                    // <!-- card-footer -->
                    // echo "<div class='card-footer'>";
                    //     echo "<a href='selecao_produtos_front.php'>Voltar</a>";
                    // echo "</div>";
                    // <!-- card-footer -->
                ?>
                
                </div>  
                <div class="celebration">
                    <img src="../../image/celebracao.png" alt="celebracao">
                </div>
                
               
            
        </div>
        </div>
    </body>
</html>

