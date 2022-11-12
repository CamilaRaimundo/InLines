<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estatísticas</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="shortcut icon" href="../image/icon.png">

        <script>
            function cliqui() {
                document.getElementById("check").click();
            }
        </script>
    </head>

    <body onload="cliqui(),select()">
    <?php
        session_start();
    ?>

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
                    <a href="./venda/carrinho_front.php" class="carrinho">
                        <ion-icon name="cart"></ion-icon>
                    </a>
                    <?php
                        if($_SESSION["usuariologado"]){
                            echo "<a href='./login/logoff_back.php' class='conta'>
                            <ion-icon name='exit-outline'></ion-icon>
                            </a>";
                        
                        }
                            
                        else{
                            echo "<a href='./login/login_front.php' class='conta'>
                                <ion-icon name='person-outline'></ion-icon>
                            </a>";
                        }
                    ?>
                </div>

            </header>
            <div class="sidebar">
                <center>
                    <img src="../image/InLines.png" class="img" alt="In Lines">
                    <br>
                    <?php
                        if($_SESSION["usuariologado"]){
                          echo"<h3 class='h3_bemvindo'>Bem-vind<i class='fa-brands fa-octopus-deploy'></i>!</h3>";   
                        }
                        else if($_SESSION["isadm"])
                            echo "<span class='conta'>Bem-vinde ADM<span>";   
                        else 
                            echo"<h2>Menu</h2>";
                    ?>
                </center>

                <a href="../index.php">
                    <ion-icon name="home"></ion-icon></i><span>Home</span>
                    <!-- <i class="fa-brands fa-octopus-deploy"></i></i><span> Home</span> -->
                </a>
                <!-- <a href="./produtos/cad_pesq_produtos_front.php">
                    <ion-icon name="cart"></ion-icon><span>Cad. Produtos</span>
                </a>
                <a href="./usuarios/cad_pesq_usuario_front.php">
                    <ion-icon name="body"></ion-icon><span>Cad. Usuários</span> 
                </a>-->

                <?php
                        if($_SESSION["isadm"]){
                            echo "<a href='./produtos/cad_pesq_produtos_front.php'>
                            <ion-icon name='cart'></ion-icon><span>Tabela Produtos</span>
                            </a>";
                            echo "<a href='./usuarios/cad_pesq_usuario_front.php'>
                            <ion-icon name='body'></ion-icon><span>Tabela usuários</span>
                            </a>";
                        }
                            
                    ?>

                <a href="./venda/selecao_produtos_front.php">
                    <i class="fa-brands fa-octopus-deploy"></i><span> Produtos</span>
                </a>
                <a href="estatisticas.php">
                    <i class="fa-solid fa-magnifying-glass-chart"></i><span> Estatísticas</span>
                </a>
                <a href="devs.php">
                    <ion-icon name="code"></ion-icon><span>Devs</span>
                </a>
                <!-- <a href="./login/login_back.php">
                    <ion-icon name="exit-outline"></ion-icon><span>Sair</span>
                </a> -->

                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>

            </div> <!-- sidebar -->
        </div> <!-- menu -->

        <div class="mae">
            <div class="container">
                <h1>Estatísticas</h1>
                <div class="movi_caixa">
                    <h2>Movimento de caixa</h2>
                    <iframe src="https://docs.google.com/spreadsheets/d/1Pm_hlxA2VBRhOs_2sEbxXaFKYaxzeZDL/edit?usp=sharing&ouid=117871962651895443978&rtpof=true&sd=true" title="Movimento de caixa" width="70%" height="600px"></iframe>
                </div>

                <div class="movi_estoque">
                    <h2>Movimento de estoque</h2>   
                    <iframe src="https://docs.google.com/spreadsheets/d/1mF0UoChQ0pBjZioE4StsjCTRqjo860YI/edit?usp=sharing&ouid=117871962651895443978&rtpof=true&sd=true" title="Movimento de Estoque" width="70%" height="600px"></iframe>
                </div>

            </div>
        </div>
