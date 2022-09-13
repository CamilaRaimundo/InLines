<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Carrinho de compras</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../image/inlines2.png">
</head>

<body>
    <div class="mae">
        <div class="menu">
            <input type="checkbox" id="check">

            <header>
                <!-- <a name="ancora"></a> -->
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
                    <a href="../usuarios/cad_pesq_usuario_front.php" class="conta">
                        <ion-icon name="person-outline"></ion-icon>
                    </a>
                </div>

            </header>
            <div class="sidebar">
                <center>
                    <img src="../../image/inlines.png" class="img" alt="In Lines">
                    <h2>Menu</h2>
                </center>

                <a href="../../index.html">
                    <ion-icon name="home"></ion-icon></i><span>Home</span>
                </a>
                <a href="../produtos/cad_pesq_produtos_front.php">
                    <ion-icon name="cart"></ion-icon><span>Produtos</span>
                </a>
                <a href="../usuarios/cad_pesq_usuario_front.php">
                    <ion-icon name="body"></ion-icon><span>Usuários</span>
                </a>
                <a href="../venda/selecao_produtos_front.php">
                    <ion-icon name="bag-check-outline"></ion-icon><span>Vendas</span>
                </a>
                <a href="#">
                    <ion-icon name="code"></ion-icon><span>Devs</span>
                </a>

            </div> <!-- div menu lateral -->


            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



            <div class="container">

                <?php
                include "selecao_produtos_back.php";

                if ($quantidade == 0) {
                    echo "Não foi encontrado nenhum produto !!!<br><br>";
                    return;
                } //if

                foreach ($resultado_lista as $linha) {
                    $preco = number_format($linha['preco'], 2, ',', '.');

                    // ------------------------------------------------------------------------------------
                    echo '<div class="gallery">
                            <div class="content2">
                        
                                <a href="selecao_detalhes_front.php?id=' . $linha['id_produto'] . '">
                                <img class="imgcard" src="../../image/' . $linha['imagem'] . '.jpeg">
                                

                                <h3 class="nomepro">' . $linha['nome'] . '</h3>
                                <h4 class="pcard">' . $linha['descricao'] . '</h4>
                                <h6 class="h6card">R$ ' . $preco . '</h6>';
                    echo '<button class="buy"><a href="carrinho_front.php?acao=add&id_produto=' . $linha['id_produto'] . '">Compre aqui</a></button>';

                    echo '</div>';

                    echo '</div>';
                }

                ?>
                <!-- php -->
            </div> <!-- container -->
        </div> <!-- mãe -->


        <!-- // if ($linha['quantidade'] <= 0) {
                                //     echo "
                                //         < div >< span style='color:red'>Produto esgotado</ span></ div>";
                                // } else {
                                //     echo "
                                //         < div>" . $linha['quantidade'] . " em estoque</ div>";
                                // }

                                // echo'    
                                //     < ul class="ulcard">
                                //         < li class="licard">
                                //             < ion-icon name="star">< /ion-icon>
                                //         < /li>
                                //         < li class="licard">
                                //             < ion-icon name="star"></ ion-icon>
                                //         < /li>
                                //         < li class="licard">
                                //             < ion-icon name="star"></ ion-icon>
                                //         < /li>
                                //         < li class="licard">
                                //             < ion-icon name="star"></ ion-icon>
                                //         < /li>
                                //         < li class="licard">
                                //             < ion-icon name="star"></ ion-icon>
                                //         < /li>
                                //         < /ul>';
                                        // echo '< button class="buy">Buy Now< /button>';

                                // -----------------------------------------------------------------------------------------

                               // <img src='img/".$linha['imagem']."' height=250 width=250> -->
        <!-- 
                                    // if ($quantidade == 0) {
                                    //     echo "Não foi encontrado nenhum produto !!!<br><br>";
                                    //     return;
                                    // } -->

        <!-- // echo '< div style="display:grid; 
                                    //             grid-template-columns: repeat(4,250px); 
                                    //             grid-column-gap: 10px;
                                    //             grid-row-gap: 10px;
                                    //             width=1250px">';

                                    // foreach ($resultado_lista as $linha) {
                                    //     $preco = number_format($linha['preco'], 2, ',', '.');
                                    //     // var_dump($resultado_lista); 
                                    //     echo "
                                    // < div style = 'border: 1px solid black;text-align:center'>
                                    //     < div>
                                    //         < br>
                                    //         <a href='selecao_detalhes_front.php?id=" . $linha['id_produto'] . "'> 
                                    //         <img src='../../image/" . $linha['imagem'] . ".jpeg' style='width:50%; height:35%'/>
                                    //         </a>
                                    //     </div>

                                    //     <div> -->
        <!-- //         < div>< p>" . $linha['nome'] . "</ p></ div>
                                    //         < div>R$ " . $preco . "</ div>";

                                    //     if ($linha['quantidade'] <= 0) {
                                    //         echo "
                                    //             < div>< span style='color:red'>Produto esgotado</span></div>";
                                    //     } else {
                                    //         echo "
                                    //             < div>" . $linha['quantidade'] . " em estoque</div>";
                                    //     }

                                        // echo "< a href='carrinho_front.php?acao=add&id_produto=" . $linha['id_produto'] . "'>Comprar</a>";

                                    //     echo "< /div>< br>";
                                    //     echo "< /div>";
                    
                                 // echo "< /div>"; -->


    </div> <!-- menu -->

</body> <!-- body -->

</html>