<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina2</title>
</head>
<body>
<form method="POST">
    <p>Nome: <input type="text" name="nome"></p>
    <P>Preço: <input type="number" step=0.01 name="preco"></p>
    <p>Quantidade: <input type="number" name="qnt"></p>
    <input type="submit" name="registrar" value="registrar"/>
<form>
<?php include "data_insert.php" ?>  
</body>
</html>

