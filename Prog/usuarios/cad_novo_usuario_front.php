<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuários</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="shortcut icon" type="text/css" href="../../image/icon.png">


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>
    </head>

    <body onload="cliqui(),select()">
        <!-- <div class="menu">
            <input type="checkbox" id="check">

            <header>
            <label for="check">
                <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
            <div>
        <div class="left">
                <h3>In <span>Line</span></h3> 
            </div>

            <div class="right">
                <a href="../venda/carrinho_front.php" class="carrinho"><ion-icon name="cart"></ion-icon></a>
                <a href="/cad_pesq_usuario_front.php" class="conta"><ion-icon name="person-outline"></ion-icon></a>
            </div> 

        </header>
        <div class="sidebar">
            <center>
                <img src="../../image/inlines.png" class="img" alt="In Lines">
                <h2>Menu</h2>
            </center>

            <a href="../../index.html"><ion-icon name="home"></ion-icon></i><span>Home</span></a>
            <a href="../produtos/cad_pesq_produtos_front.php"><ion-icon name="cart"></ion-icon><span>Cad. Produtos</span></a> -->
            <!-- <a href="cad_pesq_usuario_front.php"><ion-icon name="body"></ion-icon><span>Usuários</span></a> -->
            <!-- <a href="../venda/selecao_produtos_front.php"><i class="fa-brands fa-octopus-deploy"></i><span> Produtos</span></a>
            <a href="../devs.html"><ion-icon name="code"></ion-icon><span>Devs</span></a>
            
        </div> -->
        <form action="cad_novo_usuario_back.php" method="post">
            <div class="container_novo">
                <div class="wrapper">

                    <div class="title">
                        Cadastro de Usuários
                    </div>

                    <div class="form_items">
                        <div class="input_field">
                            <label>Nome:</label>
                            <input type="text" name="nome" class="input" placeholder="Nome"><br/><br/>
                        </div>

                        <div class="input_field">
                            <label>Email:</label><br/>    
                            <input type="email" name="email"class="input" placeholder="E-mail"><br><br>
                        </div>

                        <div class="input_field">
                            <label>Senha:</label><br>
                            <input type="password" name="senha" class="input" placeholder="Senha"><br><br>
                        </div>

                        <div class="input_field">
                            <label>Telefone:</label>
                            <input type="text" name="telefone" class="input" placeholder="Telefone"><br><br>
                        </div>

                        <div class="input_field">
                            <label>CPF:</label><br>
                            <input type="text" name="cpf" class="input" placeholder="CPF"><br><br>
                        </div>

                        <div class="input_field">
                            <label>Gênero:</label><br />
                            <select name="genero" aria-placeholder="Gênero">
                            <option label="Masculino" value="masc"></option>
                            <option label="Feminino" value="fem"></option>
                            <option label="Não Binário" value="nbin"></option>
                            <option label="Outros" value="outros"></option>
                            <option label="Prefiro não dizer" value="ndizer"></option>
                        </select> 
                            <br/><br><br>
                        </div>

                        <div class="input_field">
                            <label>Data de nascimento:</label><br />
                            <input type="date" name="datanasc" class="input" placeholder="Data de nascimento"><br><br>
                        </div>

                        <input type="submit" name="button" id="button_prod_front" value="Enviar" class = "button_prod_front">
                        <input type="button" name="button2" id="button_prod_front" value="Voltar" class = "button_prod_front" onclick="location.href='cad_pesq_usuario_front.php';">
                        <!-- <a href=''>Voltar</a><br><br> -->
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
                    <a href="../produtos/cad_pesq_produtos_front.php" id="icon_rodape"><ion-icon name="cart"></ion-icon></a> 
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