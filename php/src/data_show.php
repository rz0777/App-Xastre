<?php
    include "start_database.php";
    $sql_select = "SELECT id, nome, preco, qnt FROM MYSQL_DATABASE.Products";
    $result = $connection->query($sql_select);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Nome</th><th>Preço</th><th>Quantidade</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo ("<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["preco"]."</td><td>".$row["qnt"]."</td></tr>");
        }
        echo "</table>";
      } else {
        echo ($connection->error);
      }
      $connection->close();

?>