<link rel="stylesheet" href="../../css/style.css">
<link rel="shortcut icon" href="../../image/inlines2.png">
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
           value="<?php echo $linha['id_usuario'];?>" 
           readonly>
    <br><br>Nome
    <input type="text" name="nome" 
           value="<?php echo $linha['nome'];?>" >

    <br><br>Email
    <input type="email" name="email" 
           value="<?php echo $linha['email'];?>" >

    <br><br>Senha
    <input type="password" name="senha" 
           value="<?php echo $linha['senha'];?>" >

    <br><br>Telefone
    <input type="text" name="telefone" 
           value="<?php echo $linha['telefone'];?>" >

    <br><br>CPF
    <input type="text" name="cpf" 
           value="<?php echo $linha['cpf']; ?>" >

   
    <br><br> Gênero:<br>
    <input type="text" name="genero" 
           value="<?php echo $linha['genero']; ?>" >
           <select name= "genero">
           <!--select name="genero"> 
   <option label="Masculino" value="masc">Masculino</option!-->
   <!-- <option label="Masculino" value="masc">Masculino</option> -->
   <!-- <option label="Feminino" value="fem">Feminino</option> -->
   <!-- <option label="Não Binário" value="nbin">Não Binário</option> -->
   <!-- <option label="Outros" value="outros">Outros</option> -->
<!-- </select> -->
   
           
        

    <br><br>Data de Nascimento
    <input type="date" name="datanasc" 
           value="<?php echo $linha['datanasc'];?>" >

     <br><br>
    <input type="submit" value="Gravar">
    <input type="reset" value="Voltar" onclick="history.back()">
</form>
