<link rel="stylesheet" href="style.css">
<!-- <iframe src="../utils/cabecalho.html" title="cabecalho" frameBorder="0" 
        width="100%" scrolling="no" allowfullscreen>
</iframe> -->

<!-- Recuperando as informações do usuario -->
<?php
       $id_usuario = $_GET["id_usuario"];
       include "cad_getinfo_usuario_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<form action="cad_altera_usuario_back.php" method="post">
    <h1>Alteração de Usuarios</h1>
    
    Id Usuario
    <input type="text" name="id_usuario" 
           value="<?php echo $linha['id_usuario']; ?>" 
           readonly>
    <br><br>Nome
    <input type="text" name="nome" 
           value="<?php echo $linha['nome']; ?>" >

    <br><br>Email
    <input type="email" name="email" 
           value="<?php echo $linha['email']; ?>" >

    <br><br>Senha
    <input type="password" name="senha" 
           value="<?php echo $linha['senha']; ?>" >

    <br><br>Telefone
    <input type="text" name="telefone" 
           value="<?php echo $linha['telefone']; ?>" >

    <br><br>CPF
    <input type="text" name="cpf" 
           value="<?php echo $linha['cpf']; ?>" >

    
    <br><br> Gênero:<br>
   <select name="genero">
   <option label="Masculino" value="masc"></option>
   <option label="Feminino" value="fem"></option>
   <option label="Não Binário" value="nbin"></option>
   <option label="Outros" value="outros"></option>
   </select>
           value="<?php echo $linha['genero']; ?>" >

    <br><br>Data de Nascimento
    <input type="date" name="datanasc" 
           value="<?php echo $linha['datanasc']; ?>" >

     <br><br>
    <input type="submit" value="Gravar">
    <input type="reset" value="Voltar" onclick="history.back()">
</form>
