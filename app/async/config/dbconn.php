<?php

Class Factory {

  private static $local_db;

  public static function getConnection() {

    $servername = "db";

    $username="root";
    $password="root";

    $db="Angular_async";

    echo "Connected successfully";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
  }

}
?>
