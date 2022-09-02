<?php
    include "../../utilis/conexao.php"; 
    
    // Recuperação de dados
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $quantidade=$_POST['quantidade'];
    $preco=$_POST['preco'];
    $cod_visual=$_POST['cod_visual'];
    $ativo='true'; 
    $custo=$_POST['custo'];
    $margem_lucro=$_POST['margem_lucro'];
    $icms=$_POST['icms'];
    $imagem=$_POST['imagem'];


    // Inserção
    $sql="INSERT INTO produto
          (id_produto, nome, descricao, quantidade, preco, cod_visual, custo, margem_lucro, icms, imagem, ativo)
          VALUES (DEFAULT,
            '$nome', 
            '$descricao', 
            $quantidade, 
            $preco,
            '$cod_visual',
            $custo,
            '$margem_lucro',
            $icms,
            '$imagem',
            '$ativo');";
    
    echo $sql;

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