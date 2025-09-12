<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../model/db_connection.php";
require_once "../model/admin-log-class.php";

if (isset($_POST['login'])) {
    $database = new Database();
    $db = $database->connect();

    $client = new ClientLogin($db);
    $client->username = $_POST['username'];
    $client->password = $_POST['password'];

    $user = $client->login();

    if ($user) {
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_username'] = $user['username'];
        
        header("Location: ../admin/admin-dashboard.php");
        exit;
    } else {
        echo "<script>alert('Invalid username or password!')</script>";
    }
    include "../admin/admin-login.php";
}
?>
