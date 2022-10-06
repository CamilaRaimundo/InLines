<link rel="stylesheet" href="../../css/style.css">
<link rel="shortcut icon" type="text/css" href="../../image/logo.png">


<body>
    <div class="menu">
    <input type="checkbox" id="check">

    <header>
        <!-- <a name="ancora"></a> -->
        <label for="check">
            <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
            <!-- <i class="fa-brands fa-octopus-deploy" id="sidebar_btn"></i> -->
        </label>


        <div class="left">
            <h3>In <span>Lines</span></h3>
        </div>

        <div class="right">
            <!-- <a href="#" class="sair_btn">Sair</a> -->
            <a href="Prog/venda/carrinho_front.php" class="carrinho"><ion-icon name="cart"></ion-icon></a>
            <a href="Prog/usuarios/cad_pesq_usuario_front.php" class="conta"><ion-icon name="person-outline"></ion-icon></a>
        </div> 

    </header>
    <div class="sidebar">
        <center>
            <img src="./image/inlines.png" class="img" alt="In Lines">
            <h2>Menu</h2>
        </center>

        <a href="index.html"><ion-icon name="home"></ion-icon></i><span>Home</span></a>
        <a href="Prog/produtos/cad_pesq_produtos_front.php"><ion-icon name="cart"></ion-icon><span>Produtos</span></a>
        <a href="Prog/usuarios/cad_pesq_usuario_front.php"><ion-icon name="body"></ion-icon><span>Usuários</span></a>
        <a href="Prog/venda/selecao_produtos_front.php"><ion-icon name="bag-check-outline"></ion-icon><span>Vendas</span></a>
        <a href="#"><ion-icon name="code"></ion-icon><span>Devs</span></a>

    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>
    </div>
    <!-- DIV MENU -->

    <div class="mae">
        <div class="container">
            <!-- Recuperando as informações do produto -->
            <?php
                $id_produto = $_GET["id_produto"];
                include "cad_getinfo_produto_back.php"; 
            ?>

            <!-- Formulário (após as informações serem carregadas) -->
            <form action="cad_altera_produtos_back.php" method="post">

            <div class="wrapper">
                    <div class="title">
                        Alteração de Produtos
                    </div>
                    <div class="form_items">,
                        <div class="input_field">
                            <label>Código do Produto:</label>
                            <input type="text" class="input" name="id_produto"
                            value="<?php echo $linha['id_produto']; ?>" readonly>
                        </div>
                        <div class="input_field">
                            <label>Nome:</label>
                            <input type="text" class="input" name="nome"
                            value="<?php echo $linha['nome']; ?>">
                        </div>
                        <div class="input_field">
                            <label>Descrição:</label>
                            <input type="text" class="input" name="descricao"
                            value="<?php echo $linha['descricao']; ?>">
                        </div>
                        <div class="input_field">
                            <label>Quantidade:</label>
                            <input type="text" class="input" name="quantidade"
                            value="<?php echo $linha['quantidade']; ?>">
                        </div>
                        <div class="input_field">
                            <label>Preço:</label>
                            <input type="text" class="input" name="preco"
                            value="<?php echo $linha['preco']; ?>">
                        </div>
                        <div class="input_field">
                            <label>Código Visual:</label>
                            <input type="text" class="input" name="cod_visual"
                            value="<?php echo $linha['cod_visual']; ?>">
                        </div>
                        <div class="input_field">
                            <label>Custo:</label>
                            <input type="text" class="input" name="custo"
                            value="<?php echo $linha['custo']; ?>">
                        </div>
                        <div class="input_field">
                            <label>Margem de Lucro:</label>
                            <input type="text" class="input" name="margem_lucro"
                            value="<?php echo $linha['margem_lucro']; ?>">
                        </div>
                        <div class="input_field">
                            <label>ICMS:</label>
                            <input type="text" class="input" name="icms"
                            value="<?php echo $linha['icms']; ?>">
                        </div>
                        <div class="input_field">
                            <label>Imagem:</label>
                            <input type="text" class="input" name="imagem"
                            value="<?php echo $linha['imagem']; ?>">
                        </div>
                        <div>
                            <input type="submit" name="button" class="button_prod_front" value="Enviar" />
                            <input type="submit" value="Voltar" class="button_prod_front" onclick="history.back()"><br><br>
                        </div>
                </div>

            </form>
        </div>
    </div>
