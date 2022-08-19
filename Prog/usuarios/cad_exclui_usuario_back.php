
<?php
    include "../../utilis/conexao.php"; 

    //dados enviados do script exclui_prod_chamada_confirma_exclusao_logica.php
    $id_usuario = $_POST['id_usuario'];
    
    // Padrão para data no servidor do kinghost está americano (se atentar!!)
    $data=date('m/d/Y'); //'Y' (maiúsculo) para ano com 4 dígitos
    //$data=date('d/m/Y');

    //inserida a data de exclusao do usuario para histórico
    $sql="update usuario
            set ativo = 'false', data_exclusao = '$data' 
        WHERE id_usuario = $id_usuario";

    //echo $sql;

    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);

    if ($qtde > 0 )
        echo "<script type='text/javascript'>alert('Exclusão OK !!!')</script>";
    else
        echo "<script type='text/javascript'>alert('Erro na exclusão !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_usuario_front.php'>";
?>
