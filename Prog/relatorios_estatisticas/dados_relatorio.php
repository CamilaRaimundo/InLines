<?php
	require "conexao.php";

	$sql = "select p.cod_produto,
                  p.descricao,
                  sum(iv.qtde) as qtdevendida
             from venda v
            inner join itemvenda iv
               on v.cod_venda = iv.cod_venda
            inner join produtoscrud p
               on p.cod_produto = iv.cod_produto 
            group by p.cod_produto,
                  p.descricao
            order by qtdevendida desc ";

	$res = pg_query($conecta, $sql);
	$qtde=pg_num_rows($res);	 
?>