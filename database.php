<?php

  $servername = "localhost:3306"; 
  $username = "root";
  $password = "mysqlroot";

  try {     
      $conn = new PDO("mysql:host=$servername;dbname=php_crud", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
  } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }

?>