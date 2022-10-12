<!DOCTYPE html>
<html lang="pt-br">
       <head>
       <meta charset="UTF-8">
       <title>Exclusão de Produtos</title>
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
                            <a href="../usuarios/cad_pesq_usuario_front.php" class="conta">
                            <ion-icon name="person-outline"></ion-icon>
                            </a>
                     </div>
 
                     </header>
 
                     <div class="sidebar">
                     <center>
                            <img src="./image/inlines.png" class="img" alt="In Lines">
                            <h2>Menu</h2>
                     </center>
 
                     <a href="../../index.html">
                            <!-- <ion-icon name="home"></ion-icon></i><span>Home</span> -->
                            <i class="fa-brands fa-octopus-deploy"></i></i><span> Home</span>
                     </a>
                     <a href="cad_pesq_produtos_front.php">
                            <ion-icon name="cart"></ion-icon><span>Produtos</span>
                     </a>
                     <!-- <a href="Prog/usuarios/cad_pesq_usuario_front.php">
                            <ion-icon name="body"></ion-icon><span>Usuários</span>
                     </a> -->
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
 
                            <?php
                                   $id_produto = $_GET["id_produto"];
                                   include "cad_getinfo_produto_back.php";
                            ?>
 
                            <!-- Formulário (após as informações serem carregadas) -->
                            <form action="cad_exclui_produtos_back.php" method="post">
                            <h1>Confirmação: Exclusão de Produtos</h1>
 
                            <div>
                                   <label>Código do produto</label>
                                   <input
                                   type="text"
                                   name="id_produto"
                                   value="<?php echo $linha['id_produto'];?>" readonly>
                            </div>
 
                            <br><br>
 
                            <div>
                                   <label>Nome</label>
                                   <input type="text" name="nome"
                                   value="<?php echo $linha['nome']; ?>" readonly>
                            </div>
 
                            <br><br>
                            <div>
                                   <label>Descrição</label>
                                   <input
                                   type="text"
                                   name="descricao"
                                   value="<?php echo $linha['descricao'];?>" readonly>
                            </div>
 
                            <br><br>
                            <div>
                                   <label>Preço</label>
                                   <input
                                   type="text"
                                   name="preco"
                                   value="<?php echo $linha['preco'];?>" readonly>  
                            <div>
 
                            <br><br>
                            <div>
                                   <label>Quantidade</label>
                                   <input
                                   type="text"
                                   name="quantidade"
                                   value="<?php echo $linha['quantidade'];?>" readonly>
                            </div>
 
                            <br><br>
                            <div>
                                   <label>Codigo visual</label>
                                   <input type="text"
                                   name="cod_visual"
                                   value="<?php echo $linha['cod_visual'];?>" readonly>
 
                            <br><br>Custo
                                   <input type="text" name="custo"
                                          value="<?php echo $linha['custo'];?>" readonly>
 
                            <br><br>Margem Lucro
                                   <input type="text" name="margem_lucro"
                                          value="<?php echo $linha['margem_lucro'];?>" readonly>
                                         
                            <br><br>ICMS
                                   <input type="text" name="icms"
                                          value="<?php echo $linha['icms'];?>" readonly>
 
                            <br><br>Imagem
                                   <input type="text" name="imagem"
                                          value="<?php echo $linha['imagem'];?>" readonly>
 
                            <br><br>
                            <input type="submit" value="Confirma exclusão">
                            <input type="button" value="Editar" onclick="location.href='cad_altera_produtos_front.php?id_produto=<?php echo $id_produto?>';">
                            <input type="button" value="Voltar" onclick="location.href='cad_pesq_produtos_front.php';">
                            </form>
 
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