<?php
    include "conexao.php"; 

    $sql="SELECT * FROM produto WHERE ativo='s' ORDER BY id_produto;";
    
    // Executa o script bonitão no banco bonitão
    $resultado= pg_query($conecta, $sql);

    // Obter qtde linhas (SELECT)
    $qtde=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($qtde > 0)
    {
        // coloca os dados em uma variável
        $resultado_lista=pg_fetch_all($resultado);
    }
 
    pg_close($conecta);
?>