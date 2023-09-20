<?php

    include "start_database.php";


    if(isset($_POST["registrar"])){
    $produto_reg_name = $_POST["nome"];
    $produto_reg_preco = $_POST["preco"];
    $produto_reg_qnt = $_POST["qnt"];
    
    $sql_reg = "INSERT INTO MYSQL_DATABASE.Products (id, nome, preco, qnt) VALUES (0, '$produto_reg_name', $produto_reg_preco, $produto_reg_qnt);
    ";


    $result = $connection->query($sql_reg);

    if($result == TRUE){
        echo  "<p class='tabb'>Produto registrado com sucesso!</p>";
    }   else{
        echo "Error: " . $sql_reg . "<br>" . $connection->error;
    }

   }

?>