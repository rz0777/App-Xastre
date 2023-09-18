<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="global.css">
    <title>Pagina2</title>
</head>
<body>

    <div id="main-container">
        <h1>Cadastrar Produto</h1>
        <form id="register-form" method="POST">
            <div class="full-box">
                <label for="nome">Produto</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o produto">

            </div>
            <div class="half-box spacing">
                <label for="preço">Preço</label>
                <input type="number" name="preco" id="preco" placeholder="Digite o preço">

            </div>

            <div class="half-box spacing">
                <label for="qnt">Estoque</label>
                <input type="number" name="qnt" id="qnt" placeholder="Digite a quantidade">
            </div>

            <div class="full-box">
                <input type="submit" name="registrar"  id="btn-submit" value="Registrar">
            </div>
            <div class="full-box">
                <a href="index.php">Voltar</a>
            </div>
        </form>       
    </div>
    <?php include "data_insert.php" ?>  
</body>
</html>