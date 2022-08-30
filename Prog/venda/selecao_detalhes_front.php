<link rel="stylesheet" href="../css/cabecalho.css">

<!-- Recuperando as informações do produto -->
<?php
       $id_produto = $_GET["id_produto"];
       include "../produtos/cad_getinfo_produto_back.php"; 
?>

<div style="border: 1px solid black">

    <h1><?php echo $linha['descricao']; ?></h1>

    <!-- CHEN E ANA -->
    <img src='../../image/img.jpg' style='width:300px; height:250px'/>
    <!-- <img src='../../image/$linha['cod_visual']' style='width:300px; height:250px'/> -->
    <br><br>
    Código do produto:<?php echo $linha['id_produto'];?>
    <br><br>
    Descrição: <?php echo $linha['descricao']; ?>
    <br><br>
    Quantidade : <?php echo $linha['quantidade']; ?>
    <br><br>
    Preço: R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?>
    <br><br>
    <!-- Código do fornecedor: <?php echo $linha['id_fornecedor'];?>
    <br><br> -->
    <a href='carrinho_front.php?acao=add&idproduto=<?php echo $id_produto; ?>'>Comprar</a>
    &nbsp;<a href="selecao_produtos_front.php">Voltar</a>
</div>

