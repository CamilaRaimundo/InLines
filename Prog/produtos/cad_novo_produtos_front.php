<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
</head>
<body class=produtos_front>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="shortcut icon" href="../../image/logo.png">
    <form action="cad_novo_produtos_back.php" method="post">
 
    <div class="wrapper">
        <div class="title">
            Cadastro de Produtos
        </div>
        <div class="form_items">
            <div class="input_field">
                <label>Nome</label>
                <input type="text" class="input" name="nome">
            </div>
            <div class="input_field">
                <label>Descrição</label>
                <input type="text" class="input" name="descricao">
            </div>
            <div class="input_field">
                <label>Quantidade</label>
                <input type="text" class="input" name="quantidade">
            </div>
            <div class="input_field">
                <label>Preço:</label>
                <input type="text" class="input" name="preco">
            </div>
            <div class="input_field">
                <label>Código Visual</label>
                <input type="text" class="input" name="cod_visual">
            </div>
            <div class="input_field">
                <label>Custo</label>
                <input type="text" class="input" name="custo">
            </div>
            <div class="input_field">
                <label>Margem de Lucro</label>
                <input type="text" class="input" name="margem_lucro">
            </div>
            <div class="input_field">
                <label>ICMS</label>
                <input type="text" class="input" name="icms">
            </div>
            <div class="input_field">
                <label>Imagem:</label>
                <input type="text" class="input" name="imagem">
            </div>
            <div>
                <input type="submit" name="button" class="button_prod_front" value="Enviar" />
                

                <input type="button" name="button2" id="button" value="Voltar" class = "button" onclick="location.href='cad_pesq_usuario_front.php';"/>
                <a href="cad_pesq_produtos_front.php">
                    <input type="submit" value="Voltar" class="button_prod_front"><br><br>
                </a>
            </div>
    </div>
    </form>
</body>
</html>
