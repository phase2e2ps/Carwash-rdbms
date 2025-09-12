<?php
// Show all errors (development only!)
error_reporting(E_ALL);
ini_set('display_errors', 1);


class Database {
    private $host = "localhost";
    private $db_name = "rdbms_db";   // your database name
    private $username = "root";      // phpMyAdmin username
    private $password = "";          // phpMyAdmin password
    public $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>
