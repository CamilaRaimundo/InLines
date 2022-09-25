<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Usuários</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="shortcut icon" href="../../image/logo.png">
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


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


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
    echo "
    <div class='table'>
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
                    <a href='cad_altera_usuario_front.php?id_usuario=".$linha['id_usuario']."'> Alterar</a>&nbsp;
                    <a href='cad_exclui_usuario_front.php?id_usuario=".$linha['id_usuario']."'> Excluir</a>&nbsp;
                </div>
            </div> "; 
        } 
    // Fechando a tag da tabela
    echo "</div>";
?> 
</div>
    </div>   
</body>
</html>