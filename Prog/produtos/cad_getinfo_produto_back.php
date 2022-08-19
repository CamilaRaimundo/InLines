<?php
    include "../../utilis/conexao.php"; 

    $sql="SELECT * FROM produto WHERE id_produto = $id_produto;";

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_num_rows($resultado);

    if ( $qtde == 0 )
    {
        echo '<script language="javascript">';
        echo "alert('Produto não encontrado!')";
        echo '</script>';	
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_produtos_front.php'>";
        exit;
    }

    $linha = pg_fetch_array($resultado);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>