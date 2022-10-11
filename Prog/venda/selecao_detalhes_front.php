<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Detalhe Produto</title>
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
                    <a href="carrinho_front.php" class="carrinho"><ion-icon name="cart"></ion-icon></a>
                    <a href="../usuarios/cad_pesq_usuario_front.php" class="conta"><ion-icon name="person-outline"></ion-icon></a>
                </div> 

            </header>


                <div class="sidebar">
                    <center>
                        <img src="../../image/inlines.png" class="img" alt="In Lines">
                        <h2>Menu</h2>
                    </center>

                    <a href="../../index.html"><ion-icon name="home"></ion-icon></i><span>Home</span></a>
                    <a href="../produtos/cad_pesq_produtos_front.php"><ion-icon name="cart"></ion-icon><span>Produtos</span></a>
                    <!-- <a href="../usuarios/cad_pesq_usuario_front.php"><ion-icon name="body"></ion-icon><span>Usuários</span></a> -->
                    <a href="selecao_produtos_front.php"><ion-icon name="bag-check-outline"></ion-icon><span>Vendas</span></a>
                    <a href="../devs.html"><ion-icon name="code"></ion-icon><span>Devs</span></a>

                
                    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                    <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>
                </div> 
        </div> <!-- menu -->
        
        <div class="mae">
            <div class="container">
                <!-- Recuperando as informações do produto -->
                <?php
                    $id_produto = $_GET["id"];
                    include "../produtos/cad_getinfo_produto_back.php"; 
                ?>

                    <!-- <div style="border: 1px solid black"> -->
                    <div class="detalhes_prod">
                        
                        <div class="img_datalhes">
                            <h1><?php echo $linha['nome']; ?></h1>
                            <img src="../../image/<?php  echo $linha['imagem']; ?>.jpeg" width="50%">
                        </div> <!-- img_detalhes -->

                        <div class="detelhamento">
                            <p>Código do produto: <?php echo $linha['id_produto'];?></p>
                            <!-- <br><br> -->
                            <p>Descrição: <?php echo $linha['descricao']; ?></p>
                            <!-- <br><br> -->
                            <p>Quantidade: <?php echo $linha['quantidade']; ?></p>
                            <!-- <br><br> -->
                            <p>Preço: R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?></p>
                            <!-- <br><br> -->
                        </div>

                        <a href='carrinho_front.php?acao=add&id_produto=<?php echo $id_produto; ?>'>
                        Comprar</a>&nbsp;<a href="selecao_produtos_front.php">Voltar</a>
                    </div>
            </div> <!-- container -->
        </div> <!-- mãe -->

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

