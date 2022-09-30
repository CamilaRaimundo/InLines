<link rel="stylesheet" href="../../css/style.css">
<link rel="shortcut icon" type="text/css" href="../../image/logo.png">
<!-- Recuperando as informações do produto -->
<?php
       $id_produto = $_GET["id_produto"];
       include "cad_getinfo_produto_back.php"; 
?>

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
        <h3>In <span>Lines</span></h3>
    </div>

    <div class="right">
        <!-- <a href="#" class="sair_btn">Sair</a> -->
        <a href="Prog/venda/carrinho_front.php" class="carrinho"><ion-icon name="cart"></ion-icon></a>
        <a href="Prog/usuarios/cad_pesq_usuario_front.php" class="conta"><ion-icon name="person-outline"></ion-icon></a>
    </div> 

</header>
<div class="sidebar">
    <center>
        <img src="./image/inlines.png" class="img" alt="In Lines">
        <h2>Menu</h2>
    </center>

    <a href="index.html"><ion-icon name="home"></ion-icon></i><span>Home</span></a>
    <a href="Prog/produtos/cad_pesq_produtos_front.php"><ion-icon name="cart"></ion-icon><span>Produtos</span></a>
    <a href="Prog/usuarios/cad_pesq_usuario_front.php"><ion-icon name="body"></ion-icon><span>Usuários</span></a>
    <a href="Prog/venda/selecao_produtos_front.php"><ion-icon name="bag-check-outline"></ion-icon><span>Vendas</span></a>
    <a href="#"><ion-icon name="code"></ion-icon><span>Devs</span></a>

</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<div class="mae">
    <div class="container">
    
<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_altera_produtos_back.php" method="post">
    <h1>Alteração de Produtos</h1>

    Código do produto
       <input type="text" name="id_produto" 
              value="<?php echo $linha['id_produto']; ?>" readonly>

    <br><br>Nome
       <input type="text" name="nome" 
              value="<?php echo $linha['nome']; ?>" >

    <br><br>Descrição
       <input type="text" name="descricao" 
              value="<?php echo $linha['descricao']; ?>" >

    <br><br>Quantidade
       <input type="text" name="quantidade" 
              value="<?php echo $linha['quantidade']; ?>" >

    <br><br>Preço
       <input type="text" name="preco" 
              value="<?php echo $linha['preco']; ?>" >

    <br><br>Código Visual
       <input type="text" name="cod_visual" 
              value="<?php echo $linha['cod_visual']; ?>" >

    <br><br>Custo
       <input type="text" name="custo" 
              value="<?php echo $linha['custo']; ?>" >

    <br><br>Margem de Lucro
       <input type="text" name="margem_lucro" 
              value="<?php echo $linha['margem_lucro']; ?>" >

    <br><br>ICMS
       <input type="text" name="icms" 
              value="<?php echo $linha['icms']; ?>" >

       <br><br>Imagem
       <input type="text" name="imagem" 
              value="<?php echo $linha['imagem']; ?>" >
           
     <br><br>
    <input type="submit" value="Gravar">
    <input type="reset" value="Voltar" onclick="history.back()">
</form>

</div>
</div> 