<!DOCTYPE html>
<html lang="pt-br">

<head>
       <meta charset="UTF-8">
       <title>Exclusão de Usuário</title>
       <link rel="stylesheet" type="text/css" href="../../css/style.css">
       <link rel="shortcut icon" href="../../image/icon.png">

       <script>
            function cliqui(){
                document.getElementById("check").click();
             }
       </script>

       <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
       <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
       <script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>

       </head>

       <body onload="cliqui(),select()">
       <?php
        session_start()
       ?>

              <a href="ancora"></a>

              <?php
                     $id_usuario = $_GET["id_usuario"];
                     include "cad_getinfo_usuario_back.php"; 
              ?>

              <!-- Formulário (após as informações serem carregadas) -->
              <form action="cad_exclui_usuario_back.php" method="post">
                     <div class="container_novo">
                            <div class="wrapper">

                                   <div class="title">
                                          Exclusão de Usuários
                                   </div>

                                   <div class="form_items">
                                          <div class="input_field">
                                                 <label>Código do usuário:</label>
                                                 <input type="text" 
                                                 name="id_usuario" 
                                                 class="input"
                                                 value="<?php echo $linha['id_usuario']; ?>" readonly>
                                          </div>

                                          <!-- <br><br> -->
                     
                                          <div class="input_field">
                                                 <label>Nome</label>
                                                 <input 
                                                 type="text" 
                                                 name="nome"
                                                 class="input"
                                                 value="<?php echo $linha['nome']; ?>" readonly>       
                                          </div>

                                          <!-- <br><br> -->

                                          <div class="input_field">
                                                 <label>E-mail</label>
                                                 <input 
                                                 type="email" 
                                                 name="email"
                                                 class="input" 
                                                 value="<?php echo $linha['email']; ?>" readonly>
                                          </div>

                                          <!-- <br><br> -->

                                          <!-- <div class="input_field">
                                                 <label>Senha</label>
                                                 <input 
                                                 type="text" 
                                                 name="password"
                                                 class="input" 
                                                 value="< ?php echo $linha['senha']; ?>" readonly>  
                                          </div> -->

                                          <!-- <br><br> -->

                                          <div class="input_field" >
                                                 <label>Telefone</label>
                                                 <input type="text" 
                                                 name="telefone" 
                                                 class="input"
                                                 value="<?php echo $linha['telefone']; ?>" readonly>
                                          </div>

                                          <!-- <br><br> -->

                                          <div class="input_field" >
                                                 <label>CPF</label>
                                                 <input type="text" 
                                                 name="cpf" 
                                                 class="input"
                                                 value="<?php echo $linha['cpf']; ?>" readonly>
                                          </div>

                                          <!-- <br><br> -->

                                          <div class="input_field" >
                                                 <label>Gênero</label>
                                                 <input type="text" 
                                                 name="genero" 
                                                 class="input"
                                                 value="<?php echo $linha['genero']; ?>" readonly>
                                          </div>

                                          <!-- <br><br> -->

                                          <div class="input_field">
                                                 <label>Data de Nascimento</label>
                                                 <input type="date" 
                                                 name="datanasc" 
                                                 class="input"
                                                 value="<?php echo $linha['datanasc']; ?>" readonly>
                                          </div>
                            
                                          <!-- <br><br> -->

                                          <input type="submit" name="button" value="Confirma exclusão" id="button_prod_front" class="button_prod_front">
                                          <input type="button" name="button" value="Editar" id="button_prod_front" class="button_prod_front" onclick="location.href='cad_altera_usuario_front.php?id_usuario=<?php echo $id_usuario?>';">
                                          <input type="button" name="button2" id="button_prod_front" value="Voltar" class = "button_prod_front" onclick="location.href='cad_pesq_usuario_front.php';">


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

                    <a href="../../index.php"><ion-icon name="home" id="icon_rodape"></ion-icon></i></a>
                    <a href="../produtos/cad_pesq_produtos_front.php" id="icon_rodape"><ion-icon name="cart"></ion-icon></a> 
                    <a href="../venda/selecao_produtos_front.php"><i class="fa-brands fa-octopus-deploy" id="icon_rodape"></i></a>
                    <a href="../devs.php"><ion-icon name="code" id="icon_rodape"></ion-icon></a>
                </div>


                <div class="voltar_ao_topo">
                    <a href="#" class="top">
                        <ion-icon name="arrow-up-circle-outline"></ion-icon>
                    </a>
                </div>
    </div>

       </body>
</html>
