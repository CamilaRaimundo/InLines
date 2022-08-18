<?php
    include "conexao.php"; 
    
    // Recuperação de dados
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $qtde=$_POST['qtde'];
    $preco=$_POST['preco'];
    $cod_visual=$_POST['cod_visual'];
    $ativo='s';
    $custo=$_POST['custo'];
    $margem_lucro=$_POST['margem_lucro'];
    $icms=$_POST['icms'];

    $


    // Inserção
    $sql="INSERT INTO produto
          (id_produto, nome, descricao, qtde, preco, cod_visual, custo, margem_lucro, icms, ativo)
          VALUES (
            DEFAULT,
            '$nome', 
            '$descricao', 
            $qtde, 
            $preco,
            $cod_visual,
            $custo,
            $margem_lucro,
            $icms,
            '$ativo');";
    
    // Execução
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);

    if ($linhas > 0)
    {
        echo '<script language="javascript">';
        echo "alert('Produto salvo com sucesso!')";
        echo '</script>';	

        header("Location: cad_novo_produtos_front.php");
    }   
    else
    {
        echo '<script language="javascript">';
        echo "alert('Erro na gravação do produto!')";
        echo '</script>';	
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>  