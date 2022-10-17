<!DOCTYPE html>
<html lang="pt-br">

<head>
       <meta charset="UTF-8">
       <title>Exclusão de Produtos</title>
       <link rel="stylesheet" type="text/css" href="../../css/style.css">
       <link rel="shortcut icon" href="../../image/logo.png">

       <script>
            function cliqui() {
                document.getElementById("check").click();
            }
       </script>

       <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
       <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
       <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>

       </head>
 
<body onload="cliqui(),select()">

              <a href="ancora"></a>

              <?php
                     $id_produto = $_GET["id_produto"];
                     include "cad_getinfo_produto_back.php";
              ?>

              <!-- Formulário (após as informações serem carregadas) -->
              <div class = "mae">
              <form action="cad_exclui_produtos_back.php" method="post">
                     <div class="container_novo">
                            <div class="wrapper">

                                   <div class="title">
                                          Exclusão de Produtos
                                   </div>

                                   <div class="form_items">
                                          <div class="input_field">
                                                 <label>Código do produto</label>
                                                 <input
                                                 type="text"
                                                 name="id_produto"
                                                 class="input"
                                                 value="<?php echo $linha['id_produto'];?>" readonly>
                                          </div>

                                          <!-- <br><br> -->

                                          <div class="input_field">
                                                 <label>Nome</label>
                                                 <input type="text" name="nome"
                                                 class="input"
                                                 value="<?php echo $linha['nome']; ?>" readonly>
                                          </div>

                                          <!-- <br><br> -->

                                          <div class="input_field">
                                                 <label>Descrição</label>
                                                 <input
                                                 type="text"
                                                 name="descricao"
                                                 class="input"
                                                 value="<?php echo $linha['descricao'];?>" readonly>
                                          </div>

                                          <!-- <br><br> -->

                                          <div class="input_field">
                                                 <label>Preço</label>
                                                 <input
                                                 type="text"
                                                 name="preco"
                                                 class="input"
                                                 value="<?php echo $linha['preco'];?>" readonly>  
                                          <div>

                                          <!-- <br><br> -->
                                          
                                          <div class="input_field">
                                                 <label>Quantidade</label>
                                                 <input
                                                 type="text"
                                                 name="quantidade"
                                                 class="input"
                                                 value="<?php echo $linha['quantidade'];?>" readonly>
                                          </div>

                                          <!-- <br><br> -->

                                          <div class="input_field">
                                                 <label>Codigo visual</label>
                                                 <input type="text"
                                                 name="cod_visual"
                                                 class="input"
                                                 value="<?php echo $linha['cod_visual'];?>" readonly>

                                          <!-- <br><br> -->

                                          <div class="input_field">
                                                 <label>Custo</label>
                                                 <input type="text" 
                                                 name="custo" 
                                                 class="input"
                                                 value="<?php echo $linha['custo'];?>" readonly>
                                          </div>

                                          <!-- <br><br> -->

                                          <div class="input_field">
                                                 <label>Margem Lucro</label>
                                                 <input type="text" 
                                                 name="margem_lucro" 
                                                 class="input"
                                                 value="<?php echo $linha['margem_lucro'];?>" readonly>
                                         
                                          <!-- <br><br> -->
                                          
                                          <div class="input_field">
                                                 <label>ICMS</label>
                                                 <input type="text" 
                                                 name="icms" 
                                                 class="input"
                                                 value="<?php echo $linha['icms'];?>" readonly>
                                          </div>

                                          <!-- <br><br> -->
                                          
                                          <div class="input_field">
                                                 <label>Imagem</label>
                                                 <input type="text" 
                                                 name="imagem" 
                                                 class="input"
                                                 value="<?php echo $linha['imagem'];?>" readonly>
                                          </div>


                                          <br><br>
                                          <input type="submit" name="button" value="Confirma exclusão"  id="button_prod_front" class="button_prod_front">
                                          <input type="button" name="button" value="Editar"  id="button_prod_front" class="button_prod_front" onclick="location.href='cad_altera_produtos_front.php?id_produto=<?php echo $id_produto?>';">
                                          <input type="button" name="button2" id="button_prod_front" value="Voltar" class = "button_prod_front" onclick="location.href='cad_pesq_produtos_front.php';">
                                   </div>
                            </div>
                     </div>
              </form>
              </div>
        
 
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
       </div>
       </body>
</html>