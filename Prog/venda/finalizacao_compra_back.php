<?php
    include "../../utilis/conexao.php";  

    $compraFinalizada = false;

    function validarProdutos($resultado_lista)
    {
        $id_produto = 1;

        // Realizar as validações com os produtos aqui
        if($resultado_lista)
            foreach($resultado_lista as $linha)
            {
                $sql = "SELECT quantidade FROM produto 
                WHERE id_produto = '.$id_produto.';";
                // echo $sql;
                $res = pg_query($conecta, $sql);
                // var_dump($res);
                // if ($qtdeVendida > $quantidade)
                // {
                //     echo "<script type='text/javascript'>alert('Quantidade maior que a existente no estoque')</script>";
                //     exit;
                // }
                // return false;
            }
        return true;
    }

    // function atualizarEstoque($id_produto, $qtdeVendida, $conecta)
    // {
    //      MEXI AQ
    //     include "../../utilis/conexao.php";
    //     $sql="UPDATE produto
    //     set quantidade = '.($quantidadeProduto - $qtdeVendida).
    //     'WHERE id_produto = '.$id_produto.'
    //     AND id_usuario = '.$id_usuario.';";
    //     $res = pg_query($conecta,$sql);
    // }

    session_start();
    $resultado_lista = $_SESSION["produto"];


    $sql = "INSERT INTO venda (id_venda, id_usuario, ativo, data_venda) 
    VALUES (DEFAULT, $id_usuario, 'true', NOW());";

    // (ainda precisa programar)
    // validarProdutos($resultado_lista);
    $res = pg_query($conecta, $sql);
    $qtdLinhas = pg_affected_rows($res);
    // $sql = "INSERT INTO venda(id_venda, id_usuario, data_venda, ativo) 
    //             VALUES(DEFAULT, '.$id_usuario.', NOW(),'true');";
    // echo $sql;
    
    

    if ($qtdLinhas == 0)
        echo "<h1>Erro ao Finalizar a Compra!!!</h1>";

    if($resultado_lista)
        foreach($resultado_lista as $linha)
        {
            // $quantidade_compra = $linha['quantidade'];
            $qtdeVendida = $linha['quantidade_carrinho']; 
            // $qtdeVendida=$linha['quantidade'];
            $preco = $linha['preco'];
            $id_produto = $linha['id_produto'];
            $quantidade = $linha['quantidade'];
            // $estoque = $linha['estoque'];
            


            $sql = "INSERT INTO itemvenda (id_itemvenda, id_produto, id_venda, quantidade_compra, preco) 
                    VALUES (DEFAULT, ".$id_produto.", CURRVAL('venda_id_venda_seq'),".$quantidade.", ".$preco.");";
                                // ,".$id_produto."
                                // (DEFAULT,".$id_produto.", CURRVAL('venda_id_venda_seq'),".$estoque.",".$preco.");";
            $res = pg_query($conecta, $sql);

            // Atualizar qtde estoque 
            // (ainda precisa programar)

            $sql = "UPDATE produto SET quantidade = quantidade - $quantidade_carrinho
            WHERE id_produto = $id_produto;";
            pg_query($conecta,$sql);

            // atualizarEstoque($id_produto, $quantidade, $conecta);
        }  

        // Limpar carrinho
        $sql= "DELETE FROM carrinho
                WHERE id_usuario = $id_usuario";

        pg_query($conecta,$sql);


    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);


?>