<?php
    include "start_database";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["preco"]."</td><td>".$row["nome"]." ".$row["qnt"]."</td></tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
      $conn->close();

?>