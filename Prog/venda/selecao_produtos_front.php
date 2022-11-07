<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Produtos</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="shortcut icon" href="../../image/icon.png">

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

    <div class="mae">
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
                    <?php
                        if($_SESSION["usuariologado"]){
                            echo "<a href='../login/logoff_back.php' class='conta'>
                            <ion-icon name='exit-outline'></ion-icon>
                            </a>";
                        
                        }
                            
                        else{
                            echo "<a href='../login/login_front.php' class='conta'>
                                <ion-icon name='person-outline'></ion-icon>
                            </a>";
                        }
                    ?>
                </div>

            </header>
            <div class="sidebar">

                <center>
                    <img src="../../image/InLines.png" class="img" alt="In Lines">
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

                <a href="../../index.php">
                    <ion-icon name="home"></ion-icon></i><span> Home</span>
                </a>
                <!-- <a href="../produtos/cad_pesq_produtos_front.php">
                    <ion-icon name="cart"></ion-icon><span>Cad. Produtos</span>
                </a> 
                <a href="../usuarios/cad_pesq_usuario_front.php">
                    <ion-icon name="body"></ion-icon><span>Usuários</span>
                </a> -->
                <?php
                        if($_SESSION["isadm"]){
                            echo "<a href='../produtos/cad_pesq_produtos_front.php'>
                            <ion-icon name='cart'></ion-icon><span>Cad. Produtos</span>
                            </a>";
                            echo "<a href='../usuarios/cad_pesq_usuario_front.php'>
                            <ion-icon name='body'></ion-icon><span>Tabela usuários</span>
                            </a>";
                        }
                            
                    ?>
                <a href="../venda/selecao_produtos_front.php">
                    <i class="fa-brands fa-octopus-deploy"></i><span> Produtos</span>
                </a>
                <a href="../devs.php">
                    <ion-icon name="code"></ion-icon><span>Devs</span>
                </a>
                <!-- < ?php
                    if($_SESSION == $_SESSION["isadm"])
                        echo"<a href='../produtos/cad_novo_produto_front.php'>
                            <ion-icon name='cart'></ion-icon><span>Cad. Produtos</span>
                            <a>";
                        echo"<a href='../usuarios/cad_pesq_usuario_front.php'>
                            <ion-icon name='body'></ion-icon><span>Usuários</span>
                            </a>";
                    ?> -->
                <!-- < ?php
                    if (isset($_SESSION['isadm']) && $_SESSION['isadm'] == 't'){
                    echo "<a href='cad_novo_produtos_front.php' target='_parent' class='link'><ion-icon name='cart'</ion-icon><span>Cad. Produtos</span></a>";
                    echo "<a href='../usuario/cad_pesq_usuario_front.php' target='_parent' class='link'><ion-icon name='body'></ion-icon><span>Usuários</span></a>";
                }
                ?>
                <a href="Prog/login/login_back.php">
                    <ion-icon name="exit-outline"></ion-icon><span>Sair</span>
                </a> -->

            </div><!-- menu lateral -->


            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>


            <div class="container_vendas">
                <?php
                    include "selecao_produtos_back.php";

                    if ($quantidade == 0) {
                        echo "Não foi encontrado nenhum produto!!!<br><br>";
                        return;
                    } 

                    foreach ($resultado_lista as $linha) {
                        $preco = number_format($linha['preco'], 2, ',', '.');

                       
                        // else {
                        echo "<section class='slider'>
                            <div class='cardvenda'>
                                <div class='cardvenda-content'>
                                    <a class='class_a' href='selecao_detalhes_front.php?id=" . $linha['id_produto'] . "'>

                                    <img  class='cardvenda-img' src='../../image/" . $linha['imagem'] . ".jpeg'>

                                    <h1 class='cardvenda-title'>" . $linha['nome'] . "</h1></a>

                                    <div class='cardvenda-footer'>";
                                        if ($linha['quantidade'] <= 0) {
                                            echo "<div class='cardvenda-body'>
                                                <p class='cardvenda-estoque'>Esgotado</p>
                                            </div>";
                                            echo"<button class='btn btn-success' id='null'><a href='carrinho_front.php?acao=add&id_produto=" . $linha['id_produto'] . "' class='btn btn-success' id='null'>Comprar</a></button>";
                                            // echo "<div class='btn btn-sucssess'>Esgotado</div>";
                                        } 
                                        else{
                                        echo "<div class='cardvenda-body'>
                                                <p class='cardvenda-price'>R$ $preco</p>
                                            </div>";
                                        echo"<button class='btn btn-success'><a href='carrinho_front.php?acao=add&id_produto=" . $linha['id_produto'] . "' class='btn btn-success'>Comprar</a></button>";
                                        }
                                echo"</div>
                                </div>
                            </div>
                        </section>";
                        }
                    // } 
                    //  <!-- //foreache -->

                ?><!-- php -->
            </div><!-- container -->
        </div><!-- menu -->
    </div><!-- mãe  -->

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
            
            <!-- <div class="devs">
                < ?php
                    if($_SESSION == $_SESSION["isadm"])
                        echo"<a href='../produtos/cad_novo_produto_front.php'>";
                ?>
            </div> -->

            

            <div class="voltar_ao_topo">
                <a href="#" class="top">
                    <ion-icon name="arrow-up-circle-outline"></ion-icon>
               
                </a>
            </div>
    </div>

</body> <!-- body -->
</html>
 