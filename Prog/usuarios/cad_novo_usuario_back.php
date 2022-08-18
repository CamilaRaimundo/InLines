Novo usuario back:

<?php
    include "conexao.php"; 
    
    // Recuperação de dados
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $telefone=$_POST['telefone'];
    $cpf=$_POST['cpf'];
    $genero=$_POST['genero'];
    $datanasc=$_POST['datanasc'];
    $ativo='s';


    // Inserção
    $sql="INSERT INTO usuarios
          (id_usuario, nome, email, senha, telefone, cpf, genero, datanasc,ativo)
          VALUES (
            DEFAULT,
            '$nome', 
            '$email', 
            '$senha', 
            '$telefone',
            '$cpf',
            '$genero',
            $datanasc,
            '$ativo');";
    
    // Execução
    $resultado=pg_query($conecta,$sql);
    $linhas=pg_affected_rows($resultado);

    if ($linhas > 0)
    {
        echo '<script language="javascript">';
        echo "alert('Produto salvo com sucesso!')";
        echo '</script>';	

        header("Location: cad_novo_usuario_front.php");
    }   
    else
    {
        echo '<script language="javascript">';
        echo "alert('Erro na gravação do usuario!')";
        echo '</script>';	
    }

    // Fecha a conexão com o PostgreSQL
    pg_close($conecta);
?>  
