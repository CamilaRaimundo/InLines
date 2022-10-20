<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="shortcut icon" href="../../image/InLines.png">

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
            <div class="container_conta">

                <div class="infos_conta">

                    <!-- < ?php
                        $id_usuario = $_GET["id_usuario"];
                        include "../usuarios/cad_getinfo_usuario_back.php"; 
                    ?>  -->
 
                    <!-- Formulário (após as informações serem carregadas) -->
                    <form>

                        <div class="wrapper_conta">
                            <div class="title">
                                Seja Bem-vind<i class="fa-brands fa-octopus-deploy"></i>!
                            </div>
                
                    
                            <div class="form_items">
                                <div class=" input_field">
                                        <label>Código do usuário:</label>
                                        <input type="text" 
                                        name="id_usuario"
                                        class="input"
                                        value="<?php echo $linha['id_usuario']; ?>" >
                                </div>
                
                                <!-- <br><br> -->
                    
                                <div class=" input_field">
                                        <label>Nome:</label>
                                        <input type="text"
                                        name="nome"
                                        class="input"
                                        value="<?php echo $linha['nome']; ?>" >      
                                </div>
                
                                <!-- <br><br> -->
                
                                <div class=" input_field">
                                        <label>E-mail:</label>
                                        <input type="email"
                                        name="email"
                                        class="input"
                                        value="<?php echo $linha['email']; ?>" >
                                </div>

                
                                <!-- <br><br> -->
                
                                <div class=" input_field">
                                        <label>Senha:</label>
                                        <input
                                        type="text"
                                        name="password"
                                        class="input"
                                        value="< ?php echo $linha['senha']; ?>" >  
                                </div>
                
                                <!-- <br><br> -->
                
                                <div class=" input_field">
                                        <label>Telefone:</label>
                                        <input type="text" 
                                        name="telefone"
                                        class="input"
                                        value="<?php echo $linha['telefone']; ?>" >
                                </div>
                
                                    <!-- <br><br> -->
                                
                                    <div class=" input_field">
                                            <label>CPF:</label>
                                            <input type="text" 
                                            name="cpf"
                                            class="input"
                                            value="<?php echo $linha['cpf']; ?>" >
                                    </div>
                                
                                    <!-- <br><br> -->

                                    <div class=" input_field">
                                            <label>Gênero:</label>
                                            <input type="text" 
                                            name="genero"
                                            class="input"
                                            value="<?php echo $linha['genero']; ?>" >
                                    </div>
                                
                                    <!-- <br><br> -->
                                
                                    <div class=" input_field">
                                            <label>Data de Nascimento:</label>
                                            <input type="date" 
                                            name="datanasc"
                                            class="input"
                                            value="<?php echo $linha['datanasc']; ?>" >
                                    </div>

                                    <!-- <br><br>
                                    <br><br> -->

                                    <!-- <input type="button"  class="button_prod_front" value="Editar" onclick="location.href='cad_altera_usuario_front.php?id_usuario=<?php echo $id_usuario?>';">
                                    <input type="button"  class="button_prod_front" value="Voltar" onclick="location.href='cad_pesq_usuario_front.php';"> -->
                
                            </div>
                        </div>

                <div class="welcome">
                    <img src="../../image/Welcome.png" alt="Bem-vinde">
                </div>
                


                <div class="logoff">

                </div>


            </div> <!-- container -->
        </div> <!-- mae -->

    </body>
</html>
