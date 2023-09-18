<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="C:\Users\Elite\OneDrive\Área de Trabalho\Nova pasta\App-Xastre\php\src\estilo.css">
</head>

<body>
        <table>
        <caption class="titulo">Produtos cadastrados</caption>
        <thead>
            <tr>
                <th>PRODUTO</th>
                <th>PREÇO</th>
                <th>ESTOQUE</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lápis</td>
                <td>2.99</td>
                <td>74</td>

            </tr>
            <tr>
                <td>Mouse</td>
                <td>129.99</td>
                <td>28</td>

            </tr>
            <tr>
                <td>Garrafa</td>
                <td>74.99</td>
                <td>19</td>
                <tr>
                    <td>Colíreo</td>
                    <td>35.00</td>
                    <td>13</td>
    
                </tr>
                <tr>
                    <td>Flauta</td>
                    <td>23.00</td>
                    <td>15</td>
    
                </tr>
                <tr>
                    <td>Meias</td>
                    <td>30.00</td>
                    <td>18</td>
                  

            </tr>
        </tbody>
    </table>
    <a class="btn" href="pagina2.php">Cadastrar Produto</a>
        

        <caption>
            Produtos cadastrados
        </caption>
        <?php include "data_show.php"?>
    <a href="pagina2.php"><input type="button" value="Ir para o cadastro"></a>
</body>
</html>
