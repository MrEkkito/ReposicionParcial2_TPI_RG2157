<?php

class Database {
    private $host = "db";
    private $db_name = "blog_sistemas";
    private $username = "root";
    private $password = "rootpass";
    private $conn;

    public function getConnection() {
        if ($this->conn == null) {
            try {
                $this->conn = new PDO(
                    "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8",
                    $this->username,
                    $this->password
                );
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $exception) {
                die("Error de conexión: " . $exception->getMessage());
            }
        }
        return $this->conn;
    }
}
