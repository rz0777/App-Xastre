<?php
    $db_user_name =  "MYSQL_USER";
    $db_name = "MYSQL_DATABASE";
    $db_user_password = "MYSQL_PASSWORD";
    $db_root_password = "MYSQL_ROOT_PASSWORD";
    $server_name = "db";

    $connection = new mysqli($server_name,$db_user_name,$db_user_password);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
      }
      $sqlcreate = "CREATE TABLE MYSQL_DATABASE.Products (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL,
        preco FLOAT(6) UNSIGNED,
        qnt FLOAT(6) UNSIGNED
        )";

    if($connection->query($sqlcreate) == TRUE){
      echo("Table created");
    } if(!$connection->error == "Table 'Products' already exists"){
      echo("Table not created" . $connection->error);
    }
