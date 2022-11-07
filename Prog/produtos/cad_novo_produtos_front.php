<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="shortcut icon" href="../../image/icon.png">
        <meta charset="utf-8">
        <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>
    </head>

    <body class=produtos_front>
    <?php
        session_start()
    ?>
        <form action="cad_novo_produtos_back.php" method="post">
            <div class="container_novo">
                <div class="wrapper">
                    <div class="title">
                        Cadastro de Produtos
                    </div>

                    <div class="form_items">

                        <div class="input_field">
                            <label>Nome:</label>
                            <input type="text" class="input" name="nome" placeholder="Nome">
                        </div>

                        <div class="input_field">
                            <label>Descrição:</label>
                            <input type="text" class="input" name="descricao" placeholder="Descrição">
                        </div>

                        <div class="input_field">
                            <label>Quantidade:</label>
                            <input type="text" class="input" name="quantidade" placeholder="Quantidade">
                        </div>

                        <div class="input_field">
                            <label>Preço:   </label>
                            <input type="text" class="input" name="preco" placeholder="Preço">
                        </div>

                        <div class="input_field">
                            <label>Código Visual:   </label>
                            <input type="text" class="input" name="cod_visual" placeholder="Código Visual">
                        </div>

                        <div class="input_field">
                            <label>Custo:</label>
                            <input type="text" class="input" name="custo" placeholder="Custo">
                        </div>

                        <div class="input_field">
                            <label>Margem de Lucro:</label>
                            <input type="text" class="input" name="margem_lucro" placeholder="Margem de Lucro">
                        </div>

                        <div class="input_field">
                            <label>ICMS</label>
                            <input type="text" class="input" name="icms" placeholder="ICMS">
                        </div>

                        <div class="input_field">
                            <label>Imagem:</label>
                            <input type="text" class="input" name="imagem" placeholder="Imagem">
                        </div>
                    </div><!-- form_items -->

                    <div>
                        <input type="submit" name="button" class="button_prod_front" value="Enviar">
                        <!-- <a href="cad_pesq_produtos_front.php">
                            <input type="submit" value="Voltar" class="button_prod_front"><br><br>
                        </a> -->
                        <input type="button" name="button2"value="Voltar" class ="button_prod_front" onclick="location.href='cad_pesq_produtos_front.php';">
                        <!-- id="button_prod_front"  -->
                        <!-- <input type="button" value="Voltar" class="button_prod_front" onclick="history.back()"> -->
                    </div>

                </div><!-- wraper -->
            </div> <!-- container_novo -->
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

                        <a href="../../index.php"><ion-icon name="home" id="icon_rodape"></ion-icon></i></a>
                        <!-- <a href="cad_pesq_produtos_front.php" id="icon_rodape"><ion-icon name="cart"></ion-icon></a>  -->
                        <a href="../venda/selecao_produtos_front.php"><i class="fa-brands fa-octopus-deploy" id="icon_rodape"></i></a>
                        <a href="../devs.php"><ion-icon name="code" id="icon_rodape"></ion-icon></a>
                    </div>


                    <div class="voltar_ao_topo">
                        <a href="#" class="top">
                            <ion-icon name="arrow-up-circle-outline"></ion-icon>
                        </a>
                    </div>
        

    </body>
</html>
 
 