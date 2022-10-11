<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Alteração de Usuários</title>
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
                    <a href="../venda/carrinho_front.php" class="carrinho">
                        <ion-icon name="cart"></ion-icon>
                    </a>
                    <a href="cad_pesq_usuario_front.php" class="conta">
                        <ion-icon name="person-outline"></ion-icon>
                    </a>
                </div>

            </header>
            <div class="sidebar">
                <center>
                    <img src="../../image/inlines.png" class="img" alt="In Lines">
                    <h2>Menu</h2>
                </center>

                <a href="index.html">
                    <!-- <ion-icon name="home"></ion-icon></i><span>Home</span> -->
                    <i class="fa-brands fa-octopus-deploy"></i></i><span> Home</span>
                </a>
                <!-- <a href="Prog/produtos/cad_pesq_produtos_front.php">
                    <ion-icon name="cart"></ion-icon><span>Produtos</span>
                </a> -->
                <a href="../usuarios/cad_pesq_usuario_front.php">
                    <ion-icon name="body"></ion-icon><span>Usuários</span>
                </a>
                <a href="../venda/selecao_produtos_front.php">
                    <ion-icon name="bag-check-outline"></ion-icon><span>Vendas</span>
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

                <a href="ancora"></a>

                <!-- Recuperando as informações do usuario -->
                <?php
                    $id_usuario = $_GET["id_usuario"];
                    include "cad_getinfo_usuario_back.php"; 
                ?>

                <!-- Formulário (após as informações serem carregadas) -->
                <div class="wrapper">
                        <div class="title">
                            Alteração de Usuários
                        </div>
                        <div class="form_items">,
                            <div class="input_field">
                                <label>Id Usuário</label>
                                <input type="text" class="input" name="id_usuario"
                                value="<?php echo $linha['id_usuario']; ?>" readonly>
                            </div>
                            <div class="input_field">
                                <label>Nome:</label>
                                <input type="text" class="input" name="nome"
                                value="<?php echo $linha['nome']; ?>">
                            </div>
                            <div class="input_field">
                                <label>Email:</label>
                                <input type="text" class="input" name="email"
                                value="<?php echo $linha['email']; ?>">
                            </div>
                            <div class="input_field">
                                <label>Senha:</label>
                                <input type="text" class="input" name="senha"
                                value="<?php echo $linha['senha']; ?>">
                            </div>
                            <div class="input_field">
                                <label>Telefone:</label>
                                <input type="text" class="input" name="telefone"
                                value="<?php echo $linha['telefone']; ?>">
                            </div>
                            <div class="input_field">
                                <label>CPF:</label>
                                <input type="text" class="input" name="cpf"
                                value="<?php echo $linha['cpf']; ?>">
                            </div>
                            <div class="input_field">
                                <label>Gênero:</label>
                                <input type="text" class="input" name="genero"
                                value="<?php echo $linha['genero']; ?>"> <select name="genero">
                            </div>
                            <!--select name="genero">
                <option label="Masculino" value="masc">Masculino</option!-->
                <!-- <option label="Masculino" value="masc">Masculino</option> -->
                <!-- <option label="Feminino" value="fem">Feminino</option> -->
                <!-- <option label="Não Binário" value="nbin">Não Binário</option> -->
                <!-- <option label="Outros" value="outros">Outros</option> -->
                <!-- </select> -->

                            <div class="input_field">
                                <label>Data de Nascimento:</label>
                                <input type="text" class="input" name="datanasc"
                                value="<?php echo $linha['datanasc']; ?>">
                            </div>
                            <div>
                            <input type="submit" name="button" class="button_prod_front" value="Enviar" />
                            <input type="submit" value="Voltar" class="button_prod_front" onclick="history.back()"><br><br>            </div>
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


