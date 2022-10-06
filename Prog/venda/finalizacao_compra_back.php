<?php
    include "../../utilis/conexao.php"; 

    $compraFinalizada = false;

    function validarProdutos($resultado_lista)
    {
        // Realizar as validações com os produtos aqui
        foreach($resultado_lista as $linha)
        {
            $sql = "SELECT quantidade FROM produto WHERE ativo = 'true' ";
            $res = pg_query($conecta,$sql);
            if ($qtdeVendida > $quantidade)
            {
                echo "<script type='text/javascript'>alert('Quantidade maior que a existente no estoque')</script>";
                exit;
            }
              return false;
        }

        return true;
    }

    function atualizarEstoque($id_produto, $qtdeVendida)
    {
        //  MEXI AQ
        $res = pg_query($conecta,$sql);
        $sql="UPDATE produto
        set quantidade = '.($quantidadeProduto - $qtdeVendida).
        'WHERE id_produto = $id_produto
        AND id_usuario = '$id_usuario';
    }

    session_start();
    $resultado_lista = $_SESSION['produtos'];

    -- // (ainda precisa programar)
    validarProdutos($resultado_lista);

    $sql = "INSERT INTO venda (id_venda, id_usuario, data, ativo) 
                VALUES (DEFAULT, $id_usuario, NOW(),'true');";
    $res = pg_query($conecta, $sql);
    $qtdLinhas = pg_affected_rows($res);

    if ($qtdLinhas == 0)
        echo "<h1>Erro ao Finalizar a Compra!!!</h1>";

    foreach($resultado_lista as $linha)
    { 
        $preco = $linha['preco'];
        $qtde = $linha['quantidade'];
        $id_produto = $linha['id_produto'];

        $sql = "INSERT INTO itemvenda (id_venda, id_produto, qtde, preco) 
                    VALUES (CURRVAL('venda_id_venda_seq'),".$id_produto.",".$quantidade.",".$preco.");";
        $res = pg_query($conecta, $sql);

        // Atualizar qtde estoque 
        // (ainda precisa programar)
        atualizarEstoque($id_produto, $qtde);
    }  

    // Limpar carrinho
    $sql= "DELETE FROM carrinho
            WHERE id_usuario = $id_usuario";

    pg_query($conecta,$sql);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);


?>