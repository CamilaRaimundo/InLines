<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Formulário de Cadastro de Produtos - Tabela Produtos CRUD</title>
</head>
<body class=produtos_front>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../image/inlines2.png">
    <form action="cad_novo_produtos_back.php" method="post">

    <div class="wrapper">
        <div class="title">
            Cadastro de Produtos
        </div>
        <div class="form_items">
            <div class="input_field">
                <label>Nome</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label>Descrição</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label>Quantidade</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label>Código Visual</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label>Custo</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label>Margem de Lucro</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label>ICMS</label>
                <input type="text" class="input">
            </div>
            <div class="input_field">
                <label>Imagem</label>
                <input type="text" class="input">
            </div>
            <div>
                <input type="submit" name="button" id="button" value="Enviar" />
                <a href='cad_pesq_produtos_front.php'>Voltar</a><br><br>
            </div>
    </div>
    </form> 
</body>
</html>
