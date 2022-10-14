<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Alteração de Usuários</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="shortcut icon" href="../../image/logo.png">
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
                    <ion-icon name="home"></ion-icon></i><span>Home</span>
                    <!-- <i class="fa-brands fa-octopus-deploy"></i></i><span> Home</span> -->
                </a>
                <a href="Prog/produtos/cad_pesq_produtos_front.php">
                    <ion-icon name="cart"></ion-icon><span>Cad. Produtos</span>
                </a>
                <!-- <a href="../usuarios/cad_pesq_usuario_front.php">
                    <ion-icon name="body"></ion-icon><span>Usuários</span>
                </a> -->
                <a href="../venda/selecao_produtos_front.php">
                    <i class="fa-brands fa-octopus-deploy"></i><span> Produtos</span>
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
                <body class=produtos_front>
<link rel="stylesheet" href="../../css/style.css">
<link rel="shortcut icon" type="text/css" href="../../image/logo.png">
<?php
       $id_usuario = $_GET["id_usuario"];
       include "cad_getinfo_usuario_back.php";
?>
 
<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_exclui_usuario_back.php" method="post">
    <h1>Confirmação: Exclusão de Usuários</h1>
 
    <div class="wrapper">
       <div class="form_items">
       <div class="input-field">
              <label>Código do usuário:</label>
              <input 
              type="text" 
              name="id_usuario"
              class="input"
              value="<?php echo $linha['id_usuario']; ?>" readonly>
       </div>
 
<br><br>
       
       <div class="input-field">
              <label>Nome:</label>
              <input
              type="text"
              name="nome"
              class="input"
              value="<?php echo $linha['nome']; ?>" readonly>      
       </div>
 
<br><br>
 
       <div class="input-field">
              <label>E-mail:</label>
              <input
              type="email"
              name="email"
              class="input"
              value="<?php echo $linha['email']; ?>" readonly>
       </div>
 
<br><br>
 
       <div class="input-field">
              <label>Senha:</label>
              <input
              type="text"
              name="password"
              class="input"
              value="<?php echo $linha['senha']; ?>" readonly>  
       </div>
 
<br><br>
 
       <div class="input-field">
              <label>Telefone:</label>
              <input 
              type="text" 
              name="telefone"
              class="input"
              value="<?php echo $linha['telefone']; ?>" readonly>
       </div>
 
<br><br>
 
       <div class="input-field">
              <label>CPF:</label>
              <input 
              type="text" 
              name="cpf"
              class="input"
              value="<?php echo $linha['cpf']; ?>" readonly>
       </div>
 
<br><br>
       <div class="input-field">
              <label>Gênero:</label>
              <input 
              type="text" 
              name="genero"
              class="input"
              value="<?php echo $linha['genero']; ?>" readonly>
       </div>
 
<br><br>
 
       <div class="input-field">
              <label>Data de Nascimento:</label>
              <input 
              type="date" 
              name="datanasc"
              class="input"
              value="<?php echo $linha['datanasc']; ?>" readonly>
       </div>
       <br><br>
       <br><br>
    <input type="submit" value="Confirma exclusão">
    <input type="button"  class="button_prod_front" value="Editar" onclick="location.href='cad_altera_usuario_front.php?id_usuario=<?php echo $id_usuario?>';">
    <input type="button"  class="button_prod_front" value="Voltar" onclick="location.href='cad_pesq_usuario_front.php';">
       </div>
</div>       
</form>
</body>


    </body>
</html>


