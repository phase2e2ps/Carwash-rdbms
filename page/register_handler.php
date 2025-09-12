<?php
// Show all errors (development only!)
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../model/db_connection.php";
require_once "../model/client-register-class.php";

if (isset($_POST['register'])) {
    $database = new Database();
    $db = $database->connect();

    $client = new ClientRegister($db);
    $client->username = $_POST['username'];
    $client->password = $_POST['password'];

    if ($client->register()) {
        echo "Registration successful!";
        header("Location: ../views/client-log.php"); // redirect to login
        exit;
    } else {
        echo "<script>alert('Registration failed!')</script>";
    }
    include "../views/client-register.php";
}
