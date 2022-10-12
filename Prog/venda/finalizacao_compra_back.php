 <?php 

    include "../../utilis/conexao.php"; 

    $compraFinalizada = FALSE;

    function validarProdutos($resultado_lista, $conecta)
    {
        if($resultado_lista)
        {
            foreach($resultado_lista as $linha)
            {
                $sql="SELECT * FROM produto WHERE id_produto = ".$linha['id_produto'].";";
                
                $res=pg_query($conecta, $sql); 

                // $resulta=pg_fetch_array($res);

                /*if($linha['quantidade'] > $resulta['quantidade'] || $resulta['quantidade'] <= 0){
                
                    echo '<script language="javascript">';
                    echo "alert('Não possuimos a quantidade desejada de ".$resulta['nome']." em estoque! A quantidade máxima é de ".$resulta['quantidade']." unidades.')";
                    echo '</script>';
                    
                    echo "<center>";
                    echo "<h1>Volte ao carrinho</h1>";
                    echo "<br><br>";
                    echo "<a class='btn-confirma' href='carrinho_front.php'>Voltar ao carrinho</a>";
                    echo "</center>";

                    exit;*/

            } // foreach
            //  return false;
        } // if
    }// function

      //  return true;
    //}

    // function atualizarEstoque($conecta, $id_produto, $qtde)
    // {
    //     $sql = "UPDATE produto
    //     SET quantidade = quantidade-$qtde
    //     WHERE id_produto = $id_produto;";
    //     echo $sql;
    //     $res=pg_query($conecta, $sql);
    // }

    session_start();
    $resultado_lista = $_SESSION['produtos'];
   if($resultado_lista)
   {
    $sql = "INSERT INTO venda(id_venda, id_usuario, ativo, data_venda) VALUES (DEFAULT, $id_usuario, 'true', current_timestamp);";
            
    $res=pg_query($conecta, $sql);
    $qtdLinhas=pg_affected_rows($res);

    if ($qtdLinhas == 0)
        echo "<h1>Erro ao Finalizar a Compra!!!</h1>";
   }


   if($resultado_lista)
   {
    foreach($resultado_lista as $linha)
    { 
        $preco = $linha['preco'];
        $qtde = $linha['quantidade_carrinho'];
        $id_produto = $linha['id_produto'];
        $valortotal += floatval($linha['subtotal']);
        $id_venda= $linha['id_venda'];
        $sql_insert="INSERT INTO itemvenda(id_itemvenda, id_produto,id_venda, quantidade_compra, valor_venda) 
                VALUES (DEFAULT, $id_produto, CURRVAL('itemvenda_id_itemvenda_seq'), $qtde, $valortotal);";
                // echo $sql;
                // $preco*$qtde
        $res=pg_query($conecta, $sql_insert);

        validarProdutos($resultado_lista, $conecta);

        // atualizarEstoque($conecta, $id_produto, $quantidade);
        $sql_update = "UPDATE produto
        SET quantidade = quantidade-$qtde
        WHERE id_produto = $id_produto;";
        // echo $sql;
        $res=pg_query($conecta, $sql_update);
    }  
   }
    // Limpar carrinho
    $sql_delete="DELETE FROM carrinho
            WHERE id_usuario = $id_usuario";

    pg_query($conecta,$sql_delete);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>