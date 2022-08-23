<link rel="stylesheet" href="../css/cabecalho.css">
<iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
        width="100%" scrolling="no" allowfullscreen>
</iframe>

<!-- Recuperando as informações do produto -->
<?php
       $cod_produto = $_GET["id"];
       include "../cadastros/cad_getinfo_produto_back.php"; 
?>

<div style="border: 1px solid black">

    <h1><?php echo $linha['descricao']; ?></h1>

    <img src='../img/prd.jpg' style='width:300px; height:250px' />
    <br><br>
    Código do produto:<?php echo $linha['cod_produto']; ?>
    <br><br>
    Descrição: <?php echo $linha['descricao']; ?>
    <br><br>
    Quantidade : <?php echo $linha['qtde']; ?>
    <br><br>
    Preço: R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?>
    <br><br>
    Código do fornecedor: <?php echo $linha['cod_fornecedor']; ?>
    <br><br>
    <a href='carrinho_front.php?acao=add&codproduto=<?php echo $cod_produto; ?>'>Comprar</a>
    &nbsp;<a href="selecao_produtos_front.php">Voltar</a>
</div>

