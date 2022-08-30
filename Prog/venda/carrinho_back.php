<?php
    include "../utils/conexao.php"; 

    function getQtdeProdutoCarrinho($conecta, $id_usuario, $id_produto) 
    {
        $sql="SELECT qtde
                FROM carrinho
                WHERE id_usuario = $idusuario
                AND id_produto = $idproduto";

        $resultado=pg_query($conecta,$sql);
        $qtde=pg_num_rows($resultado);

        if ( $qtde == 0 )
            return 0;
        
        $produto_carrinho = pg_fetch_array($resultado);
        return intval($produto_carrinho['qtde']);
    }

    function addCarrinho($conecta, $id_usuario, $id_produto) 
    {
        $qtdeProduto = getQtdeProdutoCarrinho($conecta, $id_usuario, $id_produto);

        if ($qtdeProduto == 0) 
        {
            // Insere o produto
            $sql="INSERT INTO carrinho 
                    (id_produto, id_usuario, qtde)   VALUES 
                    ($id_produto, $id_usuario, 1);";
        }
        else 
        {
            $sql="UPDATE carrinho
                    set qtde = ".($qtdeProduto + 1).
                    "where id_produto = $id_produto
                    and id_usuario = $id_usuario";
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

        foreach($prods as $id_produto => $qtd)
        {
            $sql="UPDATE carrinho
                    set qtde = $qtd
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
                c.qtde * p.preco as subtotal,
                p.descricao,
                p.qtde as estoque
            FROM carrinho c
            inner join produtoscrud p
            on c.id_produto = p.id_produto
            WHERE c.id_usuario = $id_usuario
            ORDER BY p.descricao;";

    $resultado= pg_query($conecta, $sql);
    $qtde=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>