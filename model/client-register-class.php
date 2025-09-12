<?php
// Show all errors (development only!)
error_reporting(E_ALL);
ini_set('display_errors', 1);


class ClientRegister {
    private $conn;
    private $table = "client_login";

    public $username;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register() {
        $query = "INSERT INTO " . $this->table . " (user_name, user_pass, login_date)
                  VALUES (:username, :password, NOW())";
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

        // bind
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $this->password);

        return $stmt->execute();
    }
}
?>
