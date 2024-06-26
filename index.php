<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="./image/icon.png">
        <script>
            function cliqui() {
                document.getElementById("check").click();
            }
        </script>
    </head>


    <body onload="cliqui(),select()">
    <?php
        session_start()
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
                    <a href="Prog/venda/carrinho_front.php" class="carrinho">
                        <ion-icon name="cart"></ion-icon>
                    </a>
                    <?php
                        if($_SESSION["usuariologado"]){
                            echo "<a href='Prog/login/logoff_back.php' class='conta'>
                            <ion-icon name='exit-outline'></ion-icon>
                            </a>";
                        
                        }
                            
                        else{
                            echo "<a href='Prog/login/login_front.php' class='conta'>
                                <ion-icon name='person-outline'></ion-icon>
                            </a>";
                        }
                    ?>
                </div>

            </header>
            <div class="sidebar">
                <center>
                    <img src="./image/InLines.png" class="img" alt="In Lines">
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

                <a href="index.php">
                    <ion-icon name="home"></ion-icon></i><span>Home</span>
                    <!-- <i class="fa-brands fa-octopus-deploy"></i></i><span> Home</span> -->
                </a>
                <!-- ----------------------------------------ema-------------------------------------- -->
                <?php
                        if($_SESSION["isadm"]){
                            echo "<a href='./Prog/produtos/cad_pesq_produtos_front.php'>
                            <ion-icon name='cart'></ion-icon><span>Tabela Produtos</span>
                            </a>";
                            echo "<a href='./Prog/usuarios/cad_pesq_usuario_front.php'>
                            <ion-icon name='body'></ion-icon><span>Tabela usuários</span>
                            </a>";
                        }
                ?>
                <!-- -----------------------------------------------ema---------------------------------- -->
                <a href="Prog/venda/selecao_produtos_front.php">
                    <i class="fa-brands fa-octopus-deploy"></i><span> Produtos</span>
                </a>
                <a href="./Prog/estatisticas.php">
                    <i class="fa-solid fa-magnifying-glass-chart"></i><span> Estatísticas</span>
                </a>
                <a href="./Prog/devs.php">
                    <ion-icon name="code"></ion-icon><span>Devs</span>
                </a>
               

                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>

            </div> <!-- sidebar -->
        </div> <!-- menu -->


        <div class="mae">
            <div class="container">

                <a href="ancora"></a>

                <!-- ---------------------------------------CARROSSEL------------------------------------------------ -->
                <div class="carousel">
                    <div class="carousel-inner">
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true"
                            hidden="" checked="checked">
                        <div class="carousel-item">
                            <img src="./image/carrosel2.jpeg">
                        </div>
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
                            hidden="">
                        <div class="carousel-item">
                            <img src="./image/carrosel3.jpeg">
                        </div>
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
                            hidden="">
                        <div class="carousel-item">
                            <img src="./image/carrosel1.jpeg">
                        </div>
                        <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                        <label for="carousel-2" class="carousel-control next control-1">›</label>
                        <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                        <label for="carousel-3" class="carousel-control next control-2">›</label>
                        <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                        <label for="carousel-1" class="carousel-control next control-3">›</label>
                        <ol class="carousel-indicators">
                            <li>
                                <label for="carousel-1" class="carousel-bullet">•</label>
                            </li>
                            <li>
                                <label for="carousel-2" class="carousel-bullet">•</label>
                            </li>
                            <li>
                                <label for="carousel-3" class="carousel-bullet">•</label>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- -------------------------------------------------------------------------------------------------- -->
    <!-- <br><br> -->
                <div class="textoprincipal">
                    <p>Nossa empresa visa a produção de bichinhos em crochê, a partir de uma técnica japonesa, 
                        denominados amigurumis, com propósito de decoração ou brinquedo, permitindo também presentear 
                        pessoas importantes.</p>
                    <p>O enfoque é direcionado aos polvos com uma paleta de cores pastéis escolhida a dedo, sendo eles azul confiança, roxo imaginação, amarelo felicidade e verde prosperidade!</p>
                    <p>Há também alguns produtos exclusivos de versão limitada. Corre para conferir!</p>

                </div> <!-- texto principal -->

                <!-- <div class="divisao"></div> -->

                <!-- -----------------------------CARDS------------------------------------ -->
                <div class="todos_cards">
                    <div class="card card-1">

                        <!-- card-header -->
                        <div class="card-header">
                            <img src="./image/polvo4_azul.jpeg" class="card-img">
                        </div>
                        <!-- card-header -->

                        <!-- card-body -->
                        <div class="card-body">
                            <h3 class="card-local">Polvo Azul</h3>
                            <h2 class="card-titulo">Fofos!</h2>
                            <p class="card-texto">
                                Tem um rostinho de agradar a qualquer um, da criancinha até o vovô!
                            </p>
                        </div>
                        <!-- card-body -->

                        <!-- card-footer -->
                        <div class="card-footer">
                            <a href="./Prog/venda/selecao_produtos_front.php">Adquira já!</a>
                        </div>
                        <!-- card-footer -->

                    </div>
                    <!-- card card-2 -->


                    <div class="card card-2">

                        <!-- card-header -->
                        <div class="card-header">
                            <img src="./image/polvo2_amarelo.jpeg" class="card-img">
                        </div>
                        <!-- card-header -->

                        <!-- card-body -->
                        <div class="card-body">
                            <h3 class="card-local">Polvo Amarelo</h3>
                            <h2 class="card-titulo">Presentear!</h2>
                            <p class="card-texto">
                                Perfeito para presentear as pessoas que você ama! Um artigo muito especial que pode ser
                                levado para qualquer lugar.
                            </p>
                        </div>
                        <!-- card-body -->

                        <!-- card-footer -->
                        <div class="card-footer">
                            <a href="./Prog/venda/selecao_produtos_front.php">Adquira já!</a>
                        </div>
                        <!-- card-footer -->

                    </div>
                    <!-- card card-2 -->


                    <div class="card card-3">

                        <!-- card-header -->
                        <div class="card-header">
                            <img src="./image/polvo7_verde.jpeg" class="card-img">
                        </div>
                        <!-- card-header -->

                        <!-- card-body -->
                        <div class="card-body">
                            <h3 class="card-local">Polvo Verde</h3>
                            <h2 class="card-titulo">Carinho!</h2>
                            <p class="card-texto">
                                Feitos manualmente com muito capricho, carinho e esmero para você!
                            </p>
                        </div>
                        <!-- card-body -->

                        <!-- card-footer -->
                        <div class="card-footer">
                            <a href="./Prog/venda/selecao_produtos_front.php">Adquira já!</a>
                        </div>
                        <!-- card-footer -->

                    </div>


                    <!-- card card-4 -->
                    <div class="card card-4">

                        <!-- card-header -->
                        <div class="card-header">
                            <img src="./image/polvo6_rosa.jpeg" class="card-img">
                        </div>
                        <!-- card-header -->

                        <!-- card-body -->
                        <div class="card-body">
                            <h3 class="card-local">Polvo Roxo</h3>
                            <h2 class="card-titulo">Lindos!</h2>
                            <p class="card-texto">
                                Os nossos bichinos tem um charme especial, com pequenos detalhes que fazem a diferença!
                            </p>
                        </div>
                        <!-- card-body -->

                        <!-- card-footer -->
                        <div class="card-footer">
                            <a href="./Prog/venda/selecao_produtos_front.php">Adquira já!</a>
                        </div>
                        <!-- card-footer -->

                    </div>
                    <!-- card card-4 -->
                </div> <!-- todoscards -->

                <div class="tudovideo">
                    <div class="textovideo">
                        <p>Faça você mesmo!!!</p>
                        <p>Confira este vídeo demonstrando a confecção dos lindos amigurumis!</p>
                    </div>

                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/o3dx3keQlF0" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                        encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>


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
        </div>

    </body>

</html>