<?php
    include "../../utilis/conexao.php"; 

    function getQtdeProdutoCarrinho($conecta, $id_usuario, $id_produto) 
    {
        $sql="SELECT quantidade_carrinho
                FROM carrinho
                WHERE id_usuario = $id_usuario
                AND id_produto = $id_produto";

        $resultado=pg_query($conecta,$sql);
        $quantidade=pg_num_rows($resultado);

        if ( $quantidade == 0 )
            return 0;
        
        $produto_carrinho = pg_fetch_array($resultado);
        return intval($produto_carrinho['quantidade_carrinho']);
    }

    function addCarrinho($conecta, $id_usuario, $id_produto) 
    {
        $quantidadeProduto = getQtdeProdutoCarrinho($conecta, $id_usuario, $id_produto);

        if ($quantidadeProduto == 0) 
        {
            // Insere o produto
            $sql = "INSERT INTO carrinho (id_produto, id_usuario, data_carrinho, quantidade_carrinho)   
                    VALUES($id_produto, $id_usuario, NOW(), 1);";   
        }
        else 
        {
            $sql="UPDATE carrinho
                    set quantidade_carrinho = ".($quantidadeProduto + 1).
                    "WHERE id_produto = $id_produto
                    AND id_usuario = $id_usuario";
        }
        pg_query($conecta,$sql);
    }

    function removeCarrinho($conecta, $id_usuario, $id_produto) 
    {
        $sql="DELETE FROM carrinho
               where id_produto = $id_produto
                 and id_usuario = $id_usuario";

        pg_query($conecta,$sql);
    }

    function updateCarrinho($conecta, $id_usuario, $produto) 
    {
        //var_dump($prods);

        foreach($produto as $id_produto => $quantidade)
        {
            $sql="UPDATE carrinho
                    set quantidade_carrinho = $quantidade
                    where id_produto = $id_produto
                    and id_usuario = $id_usuario";
            
            pg_query($conecta,$sql);
        }
    }
    
    // Início do processamento

    if (!empty($acao))
    {
        if ($acao == 'add') 
        {
            addCarrinho($conecta, $id_usuario, $id_produto);
        }
        else if($acao == 'del')
        {
            removeCarrinho($conecta, $id_usuario, $id_produto);
        }
        else if($acao == 'up')
        {
            updateCarrinho($conecta, $id_usuario, $produto);
        }

        header("location:carrinho_front.php");
        return;
    }

    $sql="SELECT c.*,
                p.preco,
                c.quantidade_carrinho * p.preco as subtotal,
                p.descricao,
                p.quantidade as estoque
            FROM carrinho c
            inner join produto p
            on c.id_produto = p.id_produto
            WHERE c.id_usuario = $id_usuario
            ORDER BY p.descricao;";

    $resultado= pg_query($conecta, $sql);
    $quantidade=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($quantidade > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>