<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="shortcut icon" href="../../image/logo.png">

        <script>
            function cliqui() {
                document.getElementById("check").click();
            }
        </script>
        
    </head>


    <body onload="cliqui(),select()">

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
                <a href="../venda/carrinho_front.php" class="carrinho"><ion-icon name="cart"></ion-icon></a>
                <a href="../usuarios/cad_pesq_usuario_front.php" class="conta"><ion-icon name="person-outline"></ion-icon></a>
            </div> 

        </header>
        <div class="sidebar">
            <center>
                <img src="../../image/inlines.png" class="img" alt="In Lines">
                <h2>Menu</h2>
            </center>

            <a href="../../index.html"><ion-icon name="home"></ion-icon></i><span>Home</span></a>
            <a href="../produtos/cad_pesq_produtos_front.php"><ion-icon name="cart"></ion-icon><span>Cad. Produtos</span></a>
            <!-- <a href="../usuarios/cad_pesq_usuario_front.php"><ion-icon name="body"></ion-icon><span>Usuários</span></a> -->
            <a href="../venda/selecao_produtos_front.php"><i class="fa-brands fa-octopus-deploy"></i><span> Produtos</span></a>
            <a href="../devs.html"><ion-icon name="code"></ion-icon><span>Devs</span></a>

        </div>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>


        <div class="mae">
            <div class="container_login">

                <!-- <br><br>
                <form method="post" action="login_back.php">

                    <div class="login">

                        <label for="usuario">E-mail*:</label><br>
                        <input type="text" class="form-control" id="usuario" name="usuario" required><br><br>

                        <label for="senha">Senha*:</label><br>
                        <input type="password" class="form-control" id="senha" name="senha" required><br>

                        <div id="medidor"></div> 

                        <br><br>
                        <p><a href="../usuarios/cad_novo_usuario_front.php">Não tem conta? Cadastre-se aqui!</a></p>

                        <br>
                        <input type="submit" value="Logar"><br>

                        </div><br><br>
                    </div>      
                </form> -->


                <div class="main-login">

                    <div class="box-esquerdo">
                        <!-- <h1>Faça Login!</h1> -->
                        <img src="../../image/Octopus-amico_login.png">
                    </div>

                    <form method="post" action="login_back.php">

                        <div class="box-direito">
                            <div class="card-login">
                                <h1>Login</h1>

                                <div class="textfield">
                                    <label for="usuario">E-mail</label>
                                    <input type="text" name="usuario" placeholder="E-mail" class="form-control" id="usuario" name="usuario" size="40" required>

                                </div>

                                <div class="textfield">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" placeholder="Senha" class="form-control" id="senha" name="senha" size="40" required>
                                </div>

                                <p class="link_cadastro"><a href="../usuarios/cad_novo_usuario_front.php">Não tem conta? Cadastre-se aqui!</a></p>

                                <button class="btn-login" type="submit">Login</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div> <!-- container -->
        </div> <!-- mae -->

                <!-- ----------------RODAPÉ ------------------------------ -->
        <!-- <div class="footer">
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
                <a href="#" class="top"><ion-icon name="arrow-up-circle-outline"></ion-icon></a>
            </div> -->

    </body>
</html>
