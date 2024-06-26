<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Usuários</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="shortcut icon" type="text/css" href="../../image/icon.png">

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

        <header>
            <label for="check">
                <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
            </label>


            <div class="left">
                <h3>In <span>Line</span></h3> 
            </div>

            <div class="right">
                    <a href="../venda/carrinho_front.php" class="carrinho">
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

            <a href="../../index.php"><ion-icon name="home"></ion-icon></i><span>Home</span></a>
            <!-- <a href="../produtos/cad_pesq_produtos_front.php"><ion-icon name="cart"></ion-icon><span>Cad. Produtos</span></a> -->
            <!-- <a href="cad_pesq_usuario_front.php"><ion-icon name="body"></ion-icon><span>Usuários</span></a> -->
            <?php
                        if($_SESSION["isadm"]){
                            echo "<a href='../produtos/cad_pesq_produtos_front.php'>
                            <ion-icon name='cart'></ion-icon><span>Tabela Produtos</span>
                            </a>";
                            echo "<a href='cad_pesq_usuario_front.php'>
                            <ion-icon name='body'></ion-icon><span>Tabela usuários</span>
                            </a>";
                        }
                            
                    ?>
            <a href="../venda/selecao_produtos_front.php"><i class="fa-brands fa-octopus-deploy"></i><span> Produtos</span></a>
            <a href="../estatisticas.php">
                    <i class="fa-solid fa-magnifying-glass-chart"></i><span> Estatísticas</span>
            </a>
            <a href="../devs.php"><ion-icon name="code"></ion-icon><span>Devs</span></a>
            <!-- <a href="Prog/login/login_back.php">
                    <ion-icon name="exit-outline"></ion-icon><span>Sair</span>
            </a> -->

        </div>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>


        <div class="mae">
            <div class="container">

                <a href='cad_novo_usuario_front.php'>+ Novo Usuário</a><br><br>

                <?php
                    include "cad_pesq_usuario_back.php";

                    if ($qtde == 0) {
                        echo "Não foi encontrado nenhum usuário!!!<br><br>";
                        return;
                    }

                    // Começar tabela e criar o cabeçalho
                    echo "<div class='table'>
                        <div class='row'>
                            <div class='cell cellCodigo cellHeader'>
                                Cód. Usuário
                            </div>
                            <div class='cell cellNome cellHeader'>
                                Nome
                            </div>
                            <div class='cell cellCPF cellHeader'>
                                CPF
                            </div>
                            <div class='cell cellAcoes'>
                                &nbsp;
                            </div>
                        </div>";

                        // Criar linhas com os dados dos usuários
                        foreach ($resultado_lista as $linha)
                        {
                            echo "
                            <div class='row'>
                                <div class='cell cellCodigo'>
                                    ".$linha['id_usuario']."
                                </div>
                                <div class='cell cellNome'>
                                    ".$linha['nome']."
                                </div>
                                <div class='cell cellCPF'>
                                    ".$linha['cpf']."
                                </div>
                                <div class='cell cellAcoes'>
                                    <a href='cad_altera_usuario_front.php?id_usuario=".$linha['id_usuario']."'><i class='fa-solid fa-pencil'></i></a>&nbsp;
                                    <a href='cad_exclui_usuario_front.php?id_usuario=".$linha['id_usuario']."'><i class='fa-solid fa-eraser'></i></a>&nbsp;
                                </div>
                            </div> "; 
                        } 
                    //   echo"<img src='../../image/Octopus-rafiki_detalhes.png' width='30%'>";
                    // Fechando a tag da tabela
                    echo "</div>";
                ?> 

            </div> <!-- container -->
        <!-- </div>  -->
        <!-- mãe -->

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
                        echo"<a href='../produtos/cad_novo_produto_front.php'>Cad. Produtos<a>";
                        echo"<a href='../usuario/cad_pesq_usuario_front.php'>Usuários<a>";
                ?>
                </div> -->

                <div class="voltar_ao_topo">
                    <a href="#" class="top">
                        <ion-icon name="arrow-up-circle-outline"></ion-icon>
                    </a>
                </div>
    </body>
</html>