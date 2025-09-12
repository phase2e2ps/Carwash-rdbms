<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../model/db_connection.php";
require_once "../model/client-login-class.php";

if (isset($_POST['login'])) {
    $database = new Database();
    $db = $database->connect();

    $client = new ClientLogin($db);
    $client->username = $_POST['username'];
    $client->password = $_POST['password'];

    $user = $client->login();

    if ($user) {
        session_start();
        $_SESSION['username'] = $user['user_name'];
        echo "Login successful!";
        header("Location: ../views/index.php");
        exit;
    } else {
        echo "<script>alert('Invalid username or password!')</script>";
    }
    include "../views/client-log.php";
}
?>
