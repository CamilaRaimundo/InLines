<?php
    include "../../utilis/conexao.php"; 

    /* seleciona todos os itens do carrinho do usuário */
    $sql="SELECT c.*,
                 p.preco,
                 c.quantidade_carrinho * p.preco AS subtotal,
                 p.descricao,
                 p.quantidade AS estoque
            FROM carrinho c
           INNER JOIN produto p
              ON c.id_produto = p.id_produto
           WHERE c.id_usuario = $id_usuario
           ORDER BY p.descricao;";

    $resultado = pg_query($conecta, $sql);
    $qtde = pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        $resultado_lista = pg_fetch_all($resultado);
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);

    session_start();
    $_SESSION['produtos'] = $resultado_lista;
?>