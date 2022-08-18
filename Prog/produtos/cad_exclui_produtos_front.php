<link rel="stylesheet" href="style.css">
<!-- <iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
        width="100%" scrolling="no" allowfullscreen>
</iframe> -->

<?php
       $cod_produto = $_GET["id_produto"];
       include "cad_getinfo_produto_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_exclui_produtos_back.php" method="post">
    <h1>Confirmação: Exclusão de Produtos</h1>

Código do produto
       <input type="text" name="id_produto" 
              value="<?php echo $linha['id_produto']; ?>" readonly>

<br><br>Nome
    <input type="text" name="nome" 
           value="<?php echo $linha['nome']; ?>" readonly>       

<br><br>Descrição
       <input type="text" name="descricao" 
              value="<?php echo $linha['descricao']; ?>" readonly>

<br><br>Preço
       <input type="text" name="preco" 
              value="<?php echo $linha['preco']; ?>" readonly>  

<br><br>Quantidade
<input type="text" name="qtde_" 
       value="<?php echo $linha['qtde']; ?>" readonly>

<br><br>Codigo visual 
       <input type="text" name="codigovisual" 
              value="<?php echo $linha['codigovisual']; ?>" readonly>

<br><br>Custo
       <input type="text" name="custo" 
              value="<?php echo $linha['custo']; ?>" readonly>

<br><br>Margem Lucro
       <input type="text" name="margem_lucro" 
              value="<?php echo $linha['margem_lucro']; ?>" readonly>
              
<br><br>icms
       <input type="text" name="icms" 
              value="<?php echo $linha['icms']; ?>" readonly>

    <br><br>
    <input type="submit" value="Confirma exclusão">
    <input type="button" value="Editar" onclick="location.href='cad_altera_produtos_front.php?id_produto=<?php echo $cod_produto ?>';">
    <input type="button" value="Voltar" onclick="location.href='cad_pesq_produtos_front.php';">
</form>