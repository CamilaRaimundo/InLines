<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">

    <h1>Cadastro de Produtos</h1>

    <form action="cad_novo_produtos_back.php" method="post">
        <label>
            <strong>Nome:</strong><br/>    
            <input type="text" name="nome"/><br/>
            <br/>
        </label>

        <label>
            <strong>Descrição:</strong><br/>    
            <input type="text" name="descricao"/><br/>
            <br/>
        </label>

        <label>
            <strong>Quantidade:</strong><br/>
            <input type="text" name="quantidade"/><br/>
            <br/>
        </label>

        <label>
            <strong>Preço:</strong><br/>
            <input type="text" name="preco"/><br/>
            <br/>
        </label>

        <label>
            <strong>Código Visual:</strong><br/>
            <input type="text" name="cod_visual" /><br />
            <br/>
        </label>
        <label>
            <strong>Custo:</strong><br/>
            <input type="text" name="custo"/><br/>
            <br/>
        </label>
        <label>
            <strong>Margem de lucro:</strong><br/>
            <input type="text" name="margem_lucro"/><br/>
            <br/>
        </label>
        <label>
            <strong>ICMS:</strong><br/>
            <input type="text" name="icms"/><br/>
            <br/>
        </label>
        <label>
            <strong>Imagem:</strong><br/>
            <input type="text" name="imagem"/><br/>
            <br/>
        </label>


        <input type="submit" name="button" id="button" value="Enviar" />
        <a href='cad_pesq_produtos_front.php'>Voltar</a><br><br>
    </form> 
</body>
</html>
