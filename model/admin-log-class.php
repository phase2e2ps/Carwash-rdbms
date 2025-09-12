<?php
class ClientLogin {
    private $conn;
    private $table = "client_login";

    public $username;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login() {
        $query = "SELECT * FROM " . $this->table . " WHERE user_name = :username LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Use password_verify for hashed password
            if (password_verify($this->password, $row['user_pass'])) {
                return $row; // success
            } else {
                return false; // wrong password
            }
        } else {
            return false; // no such username
        }
    }
}
?>
