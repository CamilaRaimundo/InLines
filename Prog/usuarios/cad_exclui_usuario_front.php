<link rel="stylesheet" href="style.css">
<!-- <iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
        width="100%" scrolling="no" allowfullscreen>
</iframe> -->

<?php
       $cod_produto = $_GET["cod_usuario"];
       include "cad_getinfo_usuario_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_exclui_usuario_back.php" method="post">
    <h1>Confirmação: Exclusão de Usuários</h1>

Código do usuário
       <input type="text" name="id_usuario" 
              value="<?php echo $linha['id_usuario']; ?>" readonly>

<br><br>Nome
    <input type="text" name="nome" 
           value="<?php echo $linha['nome']; ?>" readonly>       

<br><br>E-mail
       <input type="email" name="email" 
              value="<?php echo $linha['email']; ?>" readonly>

<br><br>Senha
       <input type="text" name="password" 
              value="<?php echo $linha['senha']; ?>" readonly>  

<br><br>Telefone
<input type="text" name="telefone" 
       value="<?php echo $linha['telefone']; ?>" readonly>

<br><br>CPF
       <input type="text" name="cpf" 
              value="<?php echo $linha['cpf']; ?>" readonly>

<br><br>Gênero
       <input type="text" name="genero" 
              value="<?php echo $linha['genero']; ?>" readonly>

<br><br>Data de Nascimento
       <input type="date" name="datanasc" 
              value="<?php echo $linha['datanasc']; ?>" readonly>
              
    <br><br>
    <input type="submit" value="Confirma exclusão">
    <input type="button" value="Editar" onclick="location.href='cad_altera_usuario_front.php?cod_produto=<?php echo $cod_produto ?>';">
    <input type="button" value="Voltar" onclick="location.href='cad_pesq_usuario_front.php';">
</form>