<?php
    include "../../utilis/conexao.php";

    $sql="SELECT * FROM produto WHERE ativo='true' ORDER BY nome;";
    
    $resultado= pg_query($conecta, $sql);
    $quantidade=pg_num_rows($resultado);

    $resultado_lista = null;

    if ($quantidade > 0)
    {
        $resultado_lista=pg_fetch_all($resultado);
    }
 
    pg_close($conecta);
?>