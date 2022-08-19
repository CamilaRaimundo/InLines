<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Pesquisa de Usuários</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
<body>


<style>
    .table {width:700px; display:grid;}
    .row { display:block;}
    .cell {
        display:inline-block;
        padding: 5px 5px;
        margin-bottom: .5%;
        background-color: rgb(248, 242, 234);
        font-size: 10pt;
    }
    .cellHeader {text-align: center !important;}
    .cellCodigo {width:100px; }
    .cellDescricao {width:300px;}
    .cellPrecoHeader {width:100px;}
    .cellPreco {width:60px; text-align:right;}
    .cellAcoes {width:100px;}
</style>

<!-- <iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
    width="100%" scrolling="no" allowfullscreen>
</iframe> -->

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
            <div class='cell cellDescricao cellHeader'>
                Nome
            </div>
            <div class='cell cellPreco cellHeader'>
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
</body>
</html>