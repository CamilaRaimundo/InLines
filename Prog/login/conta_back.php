<?php
    include "../../utilis/conexao.php"; 
     session_start();
     $usuario=$_SESSION["id_usuario"];
     $sql="SELECT * FROM usuario WHERE email = $usuario;";

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_num_rows($resultado);

    if ( $qtde == 0 )
    {
        echo '<script language="javascript">';
        echo "alert('Usuário não encontrado!')";
        echo '</script>';	
        // echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_usuario_front.php'>";
        // exit;
    }

    $linha = pg_fetch_array($resultado);

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>