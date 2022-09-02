<?php
    include "../../utilis/conexao.php"; 

    //dados enviados do script altera_prod_lista.php
    $id_produto=$_POST["id_produto"];
    $descricao=$_POST["descricao"];
    $quantidade=$_POST["quantidade"];
    $preco=$_POST["preco"];
    $nome=$_POST["nome"];
    $cod_visual=$_POST["cod_visual"];
    $custo=$_POST["custo"];
    $margem_lucro=$_POST["margem_lucro"];
    $icms=$_POST["icms"];
    $imagem=$_POST["imagem"];


    $sql="UPDATE produto
             SET descricao = '$descricao',
                 quantidade = $quantidade,
                 preco = $preco, 
                 nome = '$nome',
                 cod_visual = '$cod_visual',
                 custo = $custo,
                 margem_lucro = $margem_lucro,
                 icms = $icms,
                 imagem = '$imagem'


           WHERE id_produto = $id_produto;";
    
    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);

    if ($qtde > 0)
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
    else	
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_produtos_front.php'>";

    // Fechando conexão com o Banco de Dados
    pg_close($conecta);
?>
