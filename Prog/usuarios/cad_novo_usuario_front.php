<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Usuarios - Tabela Usuarios CRUD</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">
    <h1>Cadastro de Usuarios</h1>

    <form action="cad_novo_usuario_back.php" method="post">
        <label>
            <strong>Nome:</strong><br />    
            <input type="text" name="nome" /><br />
            <br />
        </label>
        <label>
            <strong>Email:</strong><br />    
            <input type="email" name="email" /><br />
            <br />
        </label>
        <label>
            <strong>Senha:</strong><br />
            <input type="password" name="senha" /><br />
            <br />
        </label>
        <label>
            <strong>Telefone:</strong><br />
            <input type="text" name="telefone"  /><br />
            <br />
        </label>
        <label>
            <strong>CPF:</strong><br />
            <input type="text" name="cpf" /><br />
            <br />
        </label>
        <label>
            <strong>Gênero:</strong><br />
             <select name="genero">
             <option label="Masculino" value="masc"></option>
             <option label="Feminino" value="fem"></option>
             <option label="Não Binário" value="nbin"></option>
             <option label="Outros" value="outros"></option>
   </select>
            <br/><br>
        </label>
        <label>
            <strong>Data de nascimento:</strong><br />
            <input type="date" name="datanasc" /><br />
            <br />
        </label>

        <input type="submit" name="button" id="button" value="Enviar" />
        <a href='cad_pesq_usuario_front.php'>Voltar</a><br><br>
    </form> 
</body>
</html>
