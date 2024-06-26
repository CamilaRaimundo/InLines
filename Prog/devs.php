<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Developers</title>
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
            <div id="devs">
                <!-- class="container" -->

                <a href="ancora"></a>
            <div class="Developers">
                <h1>Desenvolvedores</h1>
            <!-- </div> -->
                
                <!--Dev1-->
                <div class="box"> 
                    <img src="../image/Ana.png" alt="Desenvolvedor" class="box-image">
                    <h3>02 - Ana Clara Gama Alba Postinguel</h3>
                    <p><b>E-mail: </b><a href="mailto:ana.gama@unesp.br">ana.gama@unesp.br</a></p>
                </div>
                <!-- <br> -->

                <!--Dev2-->
                <div class="box">
                    <img src="../image/Camila.png" alt="Desenvolvedor" class="box-image">
                    <h3>06 - Camila Pereira Raimundo</h3>
                    <p><b>E-mail: </b><a href="mailto:camila.raimundo@unesp.br">camila.raimundo@unesp.br</a></p>
                </div>
            
                <!-- <br> -->
                <!--Dev3-->
                <div class="box">
                    <img src="../image/Laura.png" alt="Desenvolvedor" class="box-image">
                    <h3>17 - Laura Caires Maldonado Jardim Galera</h3>
                    <p><b>E-mail: </b><a href="mailto:laura.caires@unesp.br">laura.caires@unesp.br</a></p>
                </div>
                <!-- <br> -->
                <!--Dev4-->
                <div class="box">
                    <img src="../image/Murilo.png" alt="Desenvolvedor" class="box-image">
                    <h3>24 - Murilo Gonzales Vieira</h3>
                    <p><b>E-mail: </b><a href="mailto:murilo.vieira@unesp.br">murilo.vieira@unesp.br</a></p>
                </div>
                <!--Dev5-->
                <div class="box">
                    <img src="../image/Chen.png" alt="Desenvolvedor" class= "box-image">
                    <h3>28 - Rafael Chun Lin Chen</h3>
                    <p><b>E-mail: </b><a href="mailto:rafael.chen@unesp.br">rafael.chen@unesp.br</a></p>
                </div>
                

                <!-- <br><br><br><br><br> -->
            </div>


            </div> <!-- container -->
        </div> <!-- mae -->

        <!-- ----------------RODAPÉ ------------------------------ -->
        <div class="footer">
            <div class="devs">
                <h2>Devs</h2>
                <ul>
                    <li>Ana Clara Gama Alba Postinguel, n° 02</li>
                    <li>Camila Pereira Raimundo, n° 06</li>
                    <li>Laura Caires Jardim Maldonado Galera, n° 17</li>
                    <li>Murilo Gonzales Vieira, n° 24</li>
                    <li>Rafael Chun Lin Chen, n° 28</li>
                </ul>

            </div>

            <div class="voltar_ao_topo">
                <a href="#" class="top">
                    <ion-icon name="arrow-up-circle-outline"></ion-icon>
                </a>
        </div>

    </body>

</html>