<?php
include "../model/db_connection.php";
include "../model/contact-class.php";

$db = (new Database())->connect();
$contact = new Contact($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate input
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        if ($contact->add($name, $email, $subject, $message)) {
            // Success → Alert + Redirect
            echo "<script>
                    alert('Message sent successfully!');
                    window.location.href = '../views/index.php';
                  </script>";
            exit;
        } else {
            // Failure → Alert + Redirect
            echo "<script>
                    alert('Failed to send message. Please try again later.');
                    window.location.href = '../views/index.php';
                  </script>";
            exit;
        }
    } else {
        // Missing fields
        echo "<script>
                alert('All fields are required!');
                window.history.back();
              </script>";
        exit;
    }
}
?>
