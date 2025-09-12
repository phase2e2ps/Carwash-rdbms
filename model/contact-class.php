<?php
class Contact {
    private $conn;
    private $table = "contact_tb";

    public function __construct($db){
        $this->conn = $db;
    }

    public function add($name, $email, $subject, $message){
        $query = "INSERT INTO $this->table (name_tb, email_tb, subject_tb, message_tb) 
                  VALUES (:name, :email, :subject, :message)";
        $stmt = $this->conn->prepare($query);

        return $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':subject' => $subject,
            ':message' => $message
        ]);
    }
}
?>
