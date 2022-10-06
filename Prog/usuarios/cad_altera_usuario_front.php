<link rel="stylesheet" href="../../css/style.css">
<link rel="shortcut icon" type="text/css" href="../../image/logo.png">
<!-- Recuperando as informações do usuario -->
<?php
       $id_usuario = $_GET["id_usuario"];
       include "cad_getinfo_usuario_back.php"; 
?>

<!-- Formulário (após as informações serem carregadas) -->
<div class="wrapper">
        <div class="title">
            Alteração de Usuários
        </div>
        <div class="form_items">,
            <div class="input_field">
                <label>Id Usuário</label>
                <input type="text" class="input" name="id_usuario"
                value="<?php echo $linha['id_usuario']; ?>" readonly>
            </div>
            <div class="input_field">
                <label>Nome:</label>
                <input type="text" class="input" name="nome"
                value="<?php echo $linha['nome']; ?>">
            </div>
            <div class="input_field">
                <label>Email:</label>
                <input type="text" class="input" name="email"
                value="<?php echo $linha['email']; ?>">
            </div>
            <div class="input_field">
                <label>Senha:</label>
                <input type="text" class="input" name="senha"
                value="<?php echo $linha['senha']; ?>">
            </div>
            <div class="input_field">
                <label>Telefone:</label>
                <input type="text" class="input" name="telefone"
                value="<?php echo $linha['telefone']; ?>">
            </div>
            <div class="input_field">
                <label>CPF:</label>
                <input type="text" class="input" name="cpf"
                value="<?php echo $linha['cpf']; ?>">
            </div>
            <div class="input_field">
                <label>Gênero:</label>
                <input type="text" class="input" name="genero"
                value="<?php echo $linha['genero']; ?>"> <select name="genero">
            </div>
            <!--select name="genero">
   <option label="Masculino" value="masc">Masculino</option!-->
   <!-- <option label="Masculino" value="masc">Masculino</option> -->
   <!-- <option label="Feminino" value="fem">Feminino</option> -->
   <!-- <option label="Não Binário" value="nbin">Não Binário</option> -->
   <!-- <option label="Outros" value="outros">Outros</option> -->
<!-- </select> -->

            <div class="input_field">
                <label>Data de Nascimento:</label>
                <input type="text" class="input" name="datanasc"
                value="<?php echo $linha['datanasc']; ?>">
            </div>
            <div>
              <input type="submit" name="button" class="button_prod_front" value="Enviar" />
              <input type="submit" value="Voltar" class="button_prod_front" onclick="history.back()"><br><br>            </div>
    </div>

