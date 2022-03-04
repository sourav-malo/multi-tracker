<?php 
  class Database {
    private $conn, $host, $db_name, $username, $password;

    public function __construct($dbHost, $dbName, $dbUsername, $dbPassword) {
      $this->host = $dbHost;
      $this->db_name = $dbName;
      $this->username = $dbUsername;
      $this->password = $dbPassword;
    }

    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }
?>