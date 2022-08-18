<?php
    include "conexao.php"; 

    /* a variável $cod_produto deve já ter sido atribuída na página pai, antes do include
       para esse arquivo */
    $sql="SELECT * FROM usuario WHERE id_usuario = $id_usuario;";

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_num_rows($resultado);

    if ( $qtde == 0 )
    {
        echo '<script language="javascript">';
        echo "alert('Usuário não encontrado!')";
        echo '</script>';	
        echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_usuario_front.php'>";
        exit;
    }

    $linha = pg_fetch_array($resultado);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>