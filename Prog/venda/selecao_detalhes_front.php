<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Detalhe Produto</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="shortcut icon" href="../../image/InLines.png">

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

        <header class="header">
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
                <h2>Menu</h2>
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

            <a href="../../index.php"><ion-icon name="home"></ion-icon></i><span>Home</span></a>
            
            <!-- <a href="../produtos/cad_pesq_produtos_front.php"><ion-icon name="cart"></ion-icon><span>Cad. Produtos</span></a> -->
            <!-- <a href="../usuarios/cad_pesq_usuario_front.php"><ion-icon name="body"></ion-icon><span>Usuários</span></a> -->
            <a href="selecao_produtos_front.php"><i class="fa-brands fa-octopus-deploy"></i><span> Produtos</span></a>
            <!-- < ?php
                    if($_SESSION == $_SESSION["isadm"])
                        echo"<a href='../produtos/cad_novo_produto_front.php'>
                            <ion-icon name='cart'></ion-icon><span>Tabela Produtos</span>
                            <a>";
                        echo"<a href='../usuarios/cad_pesq_usuario_front.php'>
                            <ion-icon name='body'></ion-icon><span>Tabela Usuários</span>
                            </a>";
            ?> -->
            <a href="estatisticas.php">
                    <i class="fa-solid fa-magnifying-glass-chart"></i><span> Estatísticas</span>
                </a>
            <a href="../devs.php"><ion-icon name="code"></ion-icon><span>Devs</span></a>
            <!-- <a href="Prog/login/login_back.php">
                    <ion-icon name="exit-outline"></ion-icon><span>Sair</span>
            </a> -->

        
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>
        </div> 
    </div> <!-- menu -->
    
    <div class="mae">
        <div class="container_detalhes">
            <!-- Recuperando as informações do produto -->
            <?php
                $id_produto = $_GET["id"];
                include "../produtos/cad_getinfo_produto_back.php"; 
            ?>

            <div class="product">
                <div class="gallery2">
                    <img src="../../image/<?php  echo $linha['imagem']; ?>.jpeg">
                </div>
                <div class="details">
                    <h1><?php echo $linha['nome']; ?></h1>
                    <p>Código do produto: <?php echo $linha['id_produto'];?></p>
                    <p>Descrição: <?php echo $linha['descricao']; ?></p>
                    <p>Quantidade: <?php echo $linha['quantidade']; ?></p>
                    <p>Preço: R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?></p>

                    <!-- <button class="btn btn-success">
                        <a href="carrinho_front.php?acao=add&id_produto=' . $linha['id_produto'] . '" class='btn btn-success'>Comprar</a></button> -->
                    <div class="botoesDetalhes">
                    <?php
                        if ($linha['quantidade'] <= 0) {
                            echo "<p class='cardvenda-estoque'>Esgotado</p>";
                            echo"<button class='btn btn-success' id='null'><a href='carrinho_front.php?acao=add&id_produto=" . $linha['id_produto'] . "' class='btn btn-success' id='null'>Comprar</a></button>";
                            // echo "oioioi";
                        } 
                        else{
                            echo "<br>";
                            echo"<button class='btn btn-success'><a href='carrinho_front.php?acao=add&id_produto=" . $linha['id_produto'] . "' class='btn btn-success'>Comprar</a></button>";
                            // echo"aaaaaa";
                        }
                        echo"<button class='btn btn-success'><a href='selecao_produtos_front.php'>Voltar</a></button>";
                        // echo"Voltar</a>"
                    ?>
                    </div> <!--botões de detalhes  -->

                </div>
             
            </div>
        </div>
    </div>
</body>
</html>