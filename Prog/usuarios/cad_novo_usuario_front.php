<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <title>Cadastro de Usuários</title>
      <link rel="stylesheet" href="../../css/style.css">
      <link rel="shortcut icon" type="text/css" href="../../image/logo.png">
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </head>
  <body>

  <div class="menu">
    <input type="checkbox" id="check">

    <header>
    <!-- <a name="ancora"></a> -->
    <label for="check">
        <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
        <!-- <i class="fa-brands fa-octopus-deploy" id="sidebar_btn"></i> -->
    </label>


    <div class="left">
        <h3>In <span>Line</span></h3> 
    </div>

    <div class="right">
        <a href="Prog/venda/carrinho_front.php" class="carrinho"><ion-icon name="cart"></ion-icon></a>
        <a href="Prog/usuarios/cad_pesq_usuario_front.php" class="conta"><ion-icon name="person-outline"></ion-icon></a>
    </div> 

</header>
<div class="sidebar">
    <center>
        <img src="../../image/inlines.png" class="img" alt="In Lines">
        <h2>Menu</h2>
    </center>

    <a href="../../index.html"><ion-icon name="home"></ion-icon></i><span>Home</span></a>
    <a href="../produtos/cad_pesq_produtos_front.php"><ion-icon name="cart"></ion-icon><span>Produtos</span></a>
    <a href="cad_pesq_usuario_front.php"><ion-icon name="body"></ion-icon><span>Usuários</span></a>
    <a href="../venda/selecao_produtos_front.php"><ion-icon name="bag-check-outline"></ion-icon><span>Vendas</span></a>
    <a href="#"><ion-icon name="code"></ion-icon><span>Devs</span></a>

</div>
<div class="mae">
    <div class="container">
        <form class="forms" action="cad_novo_usuario_back.php" method="post">
        <h1 class="title">Cadastro de Usuários</h1><br><br>
            <label>
                <strong>Nome:</strong><br />    
                <input type="text" name="nome" class="inputs" /><br />
                <br />
            </label>
            <label>
                <strong>Email:</strong><br />    
                <input type="email" 
                name="email" 
                class="inputs"
                pattern="#"
                placeholder="Telefone"
                /><br />
                <br/>
            </label>
            <label>
                <strong>Senha:</strong><br />
                <input type="password" 
                name="senha" 
                class="inputs"
                placeholder="Senha"
                /><br />
                <br />
            </label>
            <label>
                <strong>Telefone:</strong><br />
                <input type="text" 
                name="telefone"  
                class="inputs"
                placeholder="Telefone"/><br />
                <br />
            </label>
            <label>
                <strong>CPF:</strong><br />
                <input type="text" 
                name="cpf" 
                class="inputs"
                placeholder="CPF"
                /><br />
                <br />
            </label>

            <label>
                <strong>Gênero:</strong><br />
                <select name="genero" aria-placeholder="Gênero">
                <option label="Masculino" value="masc"></option>
                <option label="Feminino" value="fem"></option>
                <option label="Não Binário" value="nbin"></option>
                <option label="Outros" value="outros"></option>
                <option label="Prefiro não dizer" value="ndizer"></option>
            </select> 
                <br/><br><br>
            </label>
            <label>
                <strong>Data de nascimento:</strong><br />
                <input type="date" 
                name="datanasc" 
                class="inputs"
                placeholder="Data de nascimento"
                /><br />
                <br />
            </label>

            <input type="submit" name="button" id="button" value="Enviar" class = "button"/>
            <input type="button" name="button2" id="button" value="Voltar" class = "button" onclick="location.href='cad_pesq_usuario_front.php';"/>
            <!-- <a href=''>Voltar</a><br><br> -->
        </form> 
    </div> <!-- container -->
</div> <!-- mãe -->

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
   

    
</body>
</html>