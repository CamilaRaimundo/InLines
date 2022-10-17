<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Alteração de Produtos</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="shortcut icon" href="../../image/logo.png">

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>
   
    </head>


    <body onload="cliqui(),select()">

        <a href="ancora"></a>
        <!-- Recuperando as informações do produto -->
        <?php
            $id_produto = $_GET["id_produto"];
            include "cad_getinfo_produto_back.php"; 
        ?>

        <!-- Formulário (após as informações serem carregadas) -->
        <form action="cad_altera_produtos_back.php" method="post">
            <div class="container_novo">
                <div class="wrapper">

                    <div class="title">
                        Alteração de Produtos
                    </div>
                    
                    <div class="form_items">

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
                </div>
            </div>
        </form>

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

                <div class="devs">
                    <h2>Navegação</h2>

                    <a href="../../index.html"><ion-icon name="home" id="icon_rodape"></ion-icon></i></a>
                    <a href="cad_pesq_produtos_front.php" id="icon_rodape"><ion-icon name="cart"></ion-icon></a> 
                    <a href="../venda/selecao_produtos_front.php"><i class="fa-brands fa-octopus-deploy" id="icon_rodape"></i></a>
                    <a href="../devs.html"><ion-icon name="code" id="icon_rodape"></ion-icon></a>
                </div>


                <div class="voltar_ao_topo">
                    <a href="#" class="top">
                        <ion-icon name="arrow-up-circle-outline"></ion-icon>
                    </a>
                </div>

    </body>
</html>