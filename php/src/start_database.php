<?php
    $db_user_name =  "MYSQL_USER"
    $db_name = "MYSQL_DATABASE"
    $db_user_password = "MYSQL_PASSWORD"
    $db_root_password = "MYSQL_ROOT_PASSWORD"
    $server_name = "localhost"

    $connection = new mysqli($server_name,$db_user_name,$db_user_password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    $sqlcreate = "CREATE DATABASE Products";
