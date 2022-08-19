<?php
    include "../../utilis/conexao.php"; 

    
    $id_usuario=$_POST["id_usuario"];
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $senha_=$_POST["senha"];
    $telefone=$_POST["telefone"];
    $cpf=$_POST["cpf"];
    $genero=$_POST["genero"];
    $datanasc=$_POST["datanasc"];




    $sql="UPDATE usuario
             SET 
                 nome = '$nome',
                 email = '$email', 
                 senha = '$senha',
                 telefone = '$telefone',
                 cpf = '$cpf',
                 genero = '$genero',
                 datanasc = '$datanasc'


           WHERE id_usuario = $id_usuario;";
    
    $resultado=pg_query($conecta,$sql);
    $qtde=pg_affected_rows($resultado);

    if ($qtde > 0)
        echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
    else	
        echo "<script type='text/javascript'>alert('Erro na Gravação !!!')</script>";

    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cad_pesq_usuario_front.php'>";

    // Fechando conexão com o Banco de Dados
    pg_close($conecta);
?>